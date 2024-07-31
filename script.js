// MODAIS DE APRESENTAÇÃO

const botaoAbrir = document.querySelector('[data-modal="abrir"]'); // é importante você definir a função "data-modal" no seu botão e a função "data-" nos seguintes que aparecerem
	const botaoFechar = document.querySelector('[data-modal="fechar"]');
	const containerModal = document.querySelector('[data-modal="container"]');
	
	if(botaoAbrir && botaoFechar && containerModal) {

	function toggleModal(event) {
		event.preventDefault();
		containerModal.classList.toggle('ativo');
	}

	function cliqueForaModal(event) {
		if(event.target === this) {
		toggleModal(event);
		}
	
	}
	
	botaoAbrir.addEventListener('click', toggleModal);
	botaoFechar.addEventListener('click', toggleModal);
	containerModal.addEventListener('click', cliqueForaModal);
	
}

// QUEM ASSINOU OCULTAR EXIBIR

document.addEventListener('DOMContentLoaded', function () {
    const subscriberList = document.getElementById('subscriber-container');
    const btnQuemAssinou = document.querySelector('.btn-quemassinou');

    btnQuemAssinou.addEventListener('click', function () {
        if (subscriberList.style.display === 'none') {
            subscriberList.style.display = 'flex';
        } else {
            subscriberList.style.display = 'none';
        }
    });
});

const date = new Date();

// Definindo os compromissos diretamente no código
const compromissos = {
    "2024-07-26": ["Convenção do PSTU (auditório do Sinpol) - 17:30"],
    // Adicione mais compromissos conforme necessário
};

const findNearestDayWithAppointments = (selectedDate) => {
    let nearestDay = null;
    let nearestDayDiff = Infinity;
    const todayTime = selectedDate.getTime();

    for (let day in compromissos) {
        const dayDate = new Date(day);
        const diff = dayDate.getTime() - todayTime;

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

    updateEvents(new Date());
};

const updateEvents = (selectedDate) => {
    const formattedDate = `${selectedDate.getFullYear()}-${String(selectedDate.getMonth() + 1).padStart(2, '0')}-${String(selectedDate.getDate()).padStart(2, '0')}`;
    let events = compromissos[formattedDate] || [];
    const eventsDiv = document.querySelector('.events');

    if (events.length === 0) {
        const nearestDay = findNearestDayWithAppointments(selectedDate);
        if (nearestDay) {
            const nearestDate = `${nearestDay.getFullYear()}-${String(nearestDay.getMonth() + 1).padStart(2, '0')}-${String(nearestDay.getDate()).padStart(2, '0')}`;
            events = compromissos[nearestDate] || [];
            eventsDiv.innerHTML = `<h3 style="text-align: center; font-size: 1.2rem; margin: 10px auto;">Compromissos para ${nearestDay.getDate()}</h3>` + events.map(event => `<div>${event}</div>`).join('');
        } else {
            eventsDiv.innerHTML = "<h3 style='text-align: center; font-size: 1.2rem; margin: 10px auto;'>Sem compromissos</h3>";
        }
    } else {
        eventsDiv.innerHTML = `<h3 style="text-align: center; font-size: 1.2rem; margin: 10px auto;">Compromissos para ${selectedDate.getDate()}</h3>` + events.map(event => `<div>${event}</div>`).join('');
    }
};

document.querySelectorAll('.days').forEach(day => {
    day.addEventListener('click', (e) => {
        if (e.target.classList.contains('prev-date') || e.target.classList.contains('next-date')) return;
        const selectedDay = parseInt(e.target.innerHTML);
        const selectedDate = new Date(date.getFullYear(), date.getMonth(), selectedDay);
        updateEvents(selectedDate);
    });
});

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

// ROLAGEM

document.querySelector('a[href="#pre-candidaturas"]').addEventListener('click', function(event) {
    event.preventDefault();
    const targetSection = document.querySelector('#pre-candidaturas');
    const offset = 100; // ajuste conforme necessário
    const topPosition = targetSection.offsetTop - offset;

    window.scrollTo({
        top: topPosition,
        behavior: 'smooth'
    });
});
