// AGENDA

const date = new Date();

// Definindo os compromissos diretamente no código
const compromissos = {
    "2024-07-19": ["Teste da agenda - 16:20", "Fazer café - 16:20"],
    "2024-07-22": ["Tomar cerveja - 18:03", "ABC x Botafogo-PB - 19:00"],
    "2024-07-27": ["teste"],
    // Adicione mais compromissos conforme necessário
};

// Função para encontrar o dia mais próximo com compromissos
const findNearestDayWithAppointments = (selectedDate) => {
    let nearestDay = null;
    let nearestDayDiff = Infinity;
    const todayTime = selectedDate.getTime();

    for (let day in compromissos) {
        const dayDate = new Date(day);
        const diff = dayDate.getTime() - todayTime;

        // Verifica se a data é futura e se a diferença é menor que a menor encontrada até agora
        if (diff >= 0 && diff < nearestDayDiff && compromissos[day].length > 0) {
            nearestDay = dayDate;
            nearestDayDiff = diff;
        }
    }

    return nearestDay;
};

const renderCalendar = () => {
    date.setDate(1);
    const monthDays = document.querySelector('.days');
    const lastDay = new Date(date.getFullYear(), date.getMonth() + 1, 0).getDate();
    const prevLastDay = new Date(date.getFullYear(), date.getMonth(), 0).getDate();
    const firstDayIndex = date.getDay();
    const lastDayIndex = new Date(date.getFullYear(), date.getMonth() + 1, 0).getDay();
    const nextDays = 7 - lastDayIndex - 1;

    const months = [
        "Janeiro", "Fevereiro", "Março", "Abril",
        "Maio", "Junho", "Julho", "Agosto",
        "Setembro", "Outubro", "Novembro", "Dezembro"
    ];

    document.querySelector('.date p').innerHTML = `${months[date.getMonth()]} ${date.getFullYear()}`;

    let days = "";

    for (let x = firstDayIndex; x > 0; x--) {
        days += `<div class="prev-date">${prevLastDay - x + 1}</div>`;
    }

    for (let i = 1; i <= lastDay; i++) {
        const currentDate = `${date.getFullYear()}-${String(date.getMonth() + 1).padStart(2, '0')}-${String(i).padStart(2, '0')}`;
        if (i === new Date().getDate() && date.getMonth() === new Date().getMonth()) {
            days += `<div class="today">${i}</div>`;
        } else if (compromissos[currentDate]) {
            days += `<div class="appointment">${i}</div>`;
        } else {
            days += `<div>${i}</div>`;
        }
    }

    for (let j = 1; j <= nextDays; j++) {
        days += `<div class="next-date">${j}</div>`;
    }
    monthDays.innerHTML = days;

    // Atualiza a visualização da agenda ao carregar o calendário
    const today = new Date();
    const formattedToday = `${today.getFullYear()}-${String(today.getMonth() + 1).padStart(2, '0')}-${String(today.getDate()).padStart(2, '0')}`;
    let events = compromissos[formattedToday] || [];
    const eventsDiv = document.querySelector('.events');

    if (events.length === 0) {
        const nearestDay = findNearestDayWithAppointments(today);
        if (nearestDay) {
            const nearestDate = `${nearestDay.getFullYear()}-${String(nearestDay.getMonth() + 1).padStart(2, '0')}-${String(nearestDay.getDate()).padStart(2, '0')}`;
            events = compromissos[nearestDate] || [];
            // Atualiza a visualização da agenda com os eventos do dia mais próximo
            eventsDiv.innerHTML = `<h3 style="text-align: center;
            font-size: 1.2rem;
            margin: 10px auto;>Compromissos para ${nearestDay.getDate()}</h3>` + events.map(event => `<div>${event}</div>`).join('');
        }
    } else {
        // Atualiza a visualização da agenda com os eventos do dia atual
        eventsDiv.innerHTML = `<h3 style="text-align: center;
            font-size: 1.2rem;
            margin: 10px auto;>Compromissos para ${today.getDate()}</h3>` + events.map(event => `<div>${event}</div>`).join('');
    }

    document.querySelectorAll('.days div').forEach(day => {
        day.addEventListener('click', (e) => {
            const selectedDay = e.target.innerHTML;
            let selectedDate = `${date.getFullYear()}-${String(date.getMonth() + 1).padStart(2, '0')}-${String(selectedDay).padStart(2, '0')}`;
            let events = compromissos[selectedDate] || [];

            // Se o dia selecionado não tiver compromissos, encontrar o dia mais próximo com compromissos
            if (events.length === 0) {
                const nearestDay = findNearestDayWithAppointments(new Date(selectedDate));
                if (nearestDay) {
                    selectedDate = `${nearestDay.getFullYear()}-${String(nearestDay.getMonth() + 1).padStart(2, '0')}-${String(nearestDay.getDate()).padStart(2, '0')}`;
                    events = compromissos[selectedDate] || [];
                }
            }

            eventsDiv.innerHTML = `<h3 style="text-align: center;
            font-size: 1.2rem;
            margin: 10px auto;">Compromissos para o dia ${selectedDay}</h3>`;
            events.forEach(event => {
                const eventDiv = document.createElement('div');
                eventDiv.innerHTML = event;
                eventsDiv.appendChild(eventDiv);
            });
        });
    });
};

document.querySelector('.prev').addEventListener('click', () => {
    date.setMonth(date.getMonth() - 1);
    renderCalendar();
});

document.querySelector('.next').addEventListener('click', () => {
    date.setMonth(date.getMonth() + 1);
    renderCalendar();
});

renderCalendar();



// MENU RESPONSIVO

class MobileNavbar {
    constructor(mobileMenu, navList, navLinks) {
        this.mobileMenu = document.querySelector(mobileMenu);
        this.navList = document.querySelector(navList);
        this.navLinks = document.querySelectorAll(navLinks);
        this.activeclass = "active";

        this.handleClick = this.handleClick.bind(this);
    }

    animateLinks() {
        this.navLinks.forEach((link) => {
            link.style.animation
                ? (link.style.animation = "")
                : (link.style.animation = 'navLinkFade 0.5s ease forwards 0.3s');
        });
    }

    handleClick() {
        this.navList.classList.toggle(this.activeclass);
        this.mobileMenu.classList.toggle(this.activeclass);
        this.animateLinks();
    }

    addClickEvent() {
        this.mobileMenu.addEventListener("click", this.handleClick);
    }

    init() {
        if (this.mobileMenu) {
            this.addClickEvent();
        }
        return this;
    }
}

const mobileNavbar = new MobileNavbar(
    ".mobile-menu",
    "#nav-list",
    "#nav-list li"
);
mobileNavbar.init();
