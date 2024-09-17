console.log("Script carregado corretamente");

// MODAIS DE APRESENTAÇÃO

    // conteúdo dinâmico dos candidatos
    const candidatos = {
        'nando': `
        <p class="montserrat-font" style="line-height: 1.3; font-size: 1.2rem">
        <br><strong>Pontos do Programa:</strong><br>
    
        <br>-	Combater a privatização dos equipamentos culturais;<br>
        <br>-	Destinar mais recursos para políticas públicas de cultura;<br>
        <br>-	Dobrar o orçamento para a cultura;<br>
        <br>-	Fomentar o acesso da população aos equipamentos culturais públicos;<br>
        <br>-	Cobrar os grande devedores do município e reverter esse dinheiro para os serviços públicos;<br>
        <br>-	Universalizar a educação básica;<br>
        <br>-	SUS 100% público;<br>
        <br>-	Estatização dos serviços de saúde;<br>
        <br>-	Fim da privatização e terceirização na saúde;<br>
        <br>-	Suspensão do pagamento da dívida pública e auditoria das contas do município;<br>
        <br>-	Criação de empresa municipal de transporte;<br>
        </p>`,
    
        'tiago': `
        <p class="montserrat-font" style="line-height: 1.3; font-size: 1.2rem">
        <br><strong>Pontos do Programa:</strong><br>
    
        <br>- Combater a LGBTIfobia e transfobia;<br>
        <br>- Combater a privatização dos equipamentos culturais;<br>
        <br>- Destinar mais recursos para políticas públicas de cultura;<br>
        <br>- Dobrar o orçamento para a cultura;<br>
        <br> Fomentar o acesso da população aos equipamentos culturais públicos;<br>
        <br>- Cobrar os grandes devedores do município e reverter esse dinheiro para os serviços públicos;<br>
        <br>- Universalizar a educação básica;<br>
        <br>- Passe livre para estudantes e desempregados;<br>
        <br>- Desmilitarização da PM;<br>
        <br>- Combater o genocídio da juventude das periferias.<br>
        </p>`,
    
        'alexandre': `
        <p class="montserrat-font" style="line-height: 1.3; font-size: 1.2rem">
        <br><strong>Pontos do Programa:</strong><br>
    
        <br>-	Cobrar os grandes devedores do município;<br>
        <br>-	Suspensão do pagamento da dívida pública e auditoria das contas do município;<br>
        <br>-	Criação de empresa municipal de transporte;<br>
        <br>-	Redução da jornada de trabalho sem redução do salário;<br>
        <br>-	Plano de obras públicas para empregar todos os desempregados;<br>
        <br>-	Universalização do saneamento básico.<br>
        <br>-	Passe livre para estudantes e desempregados;<br>
        <br>-	Contra o desmonte da Urbana;<br>
        <br>-	Combater a especulação imobiliária;<br>
        <br>-	Defender a mata atlântica e os manguezais;<br>
        </p>`,
    
        'erica': `
        <p class="montserrat-font" style="line-height: 1.3; font-size: 1.2rem">
        <br><strong>Pontos do Programa:</strong><br>
    
        <br>-	Combater o machismo e o racismo;<br>
        <br>-	Ampliar a Lei Maria da Penha;<br>
        <br>-	Defender os povos indígenas;<br>
        <br>-	SUS 100% público;<br>
        <br>-	Estatização dos serviços de saúde;<br>
        <br>-	Fim da privatização e terceirização na saúde;<br>
        <br>-	Estruturação das Unidades Básicas de Saúde;<br>
        </p>`,
    
        'jairan': `
        <p class="montserrat-font" style="line-height: 1.3; font-size: 1.2rem">
        <br><strong>Pontos do Programa:</strong><br>
    
        <br>-	Combater o racismo, a LGBTIfobia e a transfobia;<br>
        <br>-	Defender os povos indígenas;<br>
        <br>-	Combater o racismo religioso;<br>
        <br>-	Igualar o salário dos políticos para o de uma professora municipal;<br>
        <br>-	Ampliação da estrutura física das escolas;<br>
        <br>-	Universalizar a educação básica;<br>
        <br>-	5% do PIB de Natal para a educação.<br>
        <br>-	Defender o piso do magistério.<br>
        <br>-	Concurso público para a educação.<br>
        <br>-	Defender acessibilidade e inclusão nas escolas e nos demais espaços públicos.<br>
        </p>`,
    
        'luciana': `
        <p class="montserrat-font" style="line-height: 1.3; font-size: 1.2rem">
        <br><strong>Pontos do Programa:</strong><br>
    
        <br>-	Combater o machismo;<br>
        <br>-	Ampliar a Lei Maria da Penha;<br>
        <br>-	Igualar o salário dos políticos para o de uma professora municipal;<br>
        <br>-	Ampliação da estrutura física das escolas;<br>
        <br>-	Universalizar a educação básica;<br>
        <br>-	5% do PIB de Natal para a educação.<br>
        <br>-	Defender o piso do magistério.<br>
        <br>-	Concurso público para a educação.<br>
        <br>-	Defender acessibilidade e inclusão nas escolas e nos demais espaços públicos.<br>
        </p>`,
    
    
        };
        
        document.addEventListener('DOMContentLoaded', () => {
            const modalContainer = document.querySelector('.modalNando-container');
            const modalConteudo = document.getElementById('modalConteudo');
            const botaoFechar = document.getElementById('fecharModal');
            
            document.querySelectorAll('.candidato').forEach(candidato => {
                candidato.addEventListener('click', (event) => {
                  event.preventDefault();
                  const idCandidato = candidato.getAttribute('data-candidato');
                  if (candidatos[idCandidato]) {
                    modalConteudo.innerHTML = candidatos[idCandidato];
                    modalContainer.style.display = 'flex';
                  }
                });
              });
    
              botaoFechar.addEventListener('click', () => {
                modalContainer.style.display = 'none';
              });
            
              modalContainer.addEventListener('click', (event) => {
                if (event.target === modalContainer) {
                  modalContainer.style.display = 'none';
                }
              });
            });

const date = new Date();
// Definindo os compromissos diretamente no código
const compromissos = {
	"2024-08-10": ["Inauguração da sede do PSTU (Rua Santo Antônio, 697, Cidade Alta. Em Frente a Igreja do Galo)  - 10:00"],
    "2024-08-15": ["Roda de conversa sobre meio ambiente, às 19h, online. (acompanhe as redes)"],
    "2024-08-16": ["Agitação e panfletagem com militantes nas proximidades do Hospital Municipal de Natal - 06:00", "Agitação e panfletagem com militantes na Praça Cívica - 16:00", "Reunião com apoiadores na sede do PSTU, na Cidade Alta. (Rua Santo Antônio, 697, Cidade Alta. Em Frente a Igreja do Galo) - 18h"],
	"2024-08-20": ["Gravação de programas em Ponta Negra (Nando Poeta) - 08:00 às 12:00", "Assembleia dos professores na escola Winston Churchill (Nando Poeta)- 14:00", "Entrevista ao Extra Classe TV Web (Nando Poeta) - 19:00"],
	"2024-08-22": ["Faz panfletagem junto aos trabalhadores da saúde de Natal e acompanha assembleia da categoria no Sindicato dos Bancários (Nando Poeta) - 08:30", "Participa do Dia do Folclore na Casa de Câmara Cascudo (Nando Poeta) - 10:00", "Presta apoio aos auxiliares de enfermagem de Natal, que pedem aprovação de projeto de lei da categoria na Câmara Municipal (Nando Poeta) - 12:30", "Participa de evento do IPHAN - Reconhecendo valores patrimoniais no Centro Histórico de Natal (Nando Poeta) - 13:30", "Participa de ato público em alusão ao Agosto Lilás de combate à violência contra as mulheres, na Praça Gentil Ferreira (Nando Poeta) - 15:00",
    ],
	"2024-08-23": ["Recebe propostas da Arquidiocese de Natal no Centro Pastoral Pio X, na Catedral Metropolitana. (Nando Poeta) - 08:00", "Faz visita ao Museu Câmara Cascudo, que recebe coleção inédita de folhetos de cordel. (Nando Poeta) - 10:00", "Participa de evento cultural na Estação do Cordel, na Cidade Alta. (Nando Poeta) - 19:00"],
	"2024-08-28": ["Nando Poeta grava vídeos para campanha - 10h", "Nando Poeta se reúne com apoiadores na sede do PSTU - 16h", "Panfletagem junto a trabalhadores bancários Av. Deodoro da Fonseca, em Petrópolis - 19h"],
    "2024-09-11": ["Panfletagem junto a trabalhadores da saúde e acompanha assembleia da categoria - 9h", "Panfletagem junto a professores e acompanha assembleia da categoria - 14h", "Panfletagem nas proximidades da passarela do Via Direta. - 17h"],
    "2024-09-12": ["Panfletagem nas proximidades do IPERN - 7h30", "Gravação de vídeos para campanha - 10h", "Encontro online com instituto de pesquisas socioeconômicas - 19h30"],
    "2024-09-13": ["Panfletagem nas proximidades da Feira do Parque dos Coqueiros - 7h", "Roda de conversa sobre o combate à violência contra as mulheres, na sede do PSTU - 18h", "Acompanha o evento Slam Rima Central, na Cidade Alta - 19h30"],
    "2024-09-14": ["Panfletagem nas proximidades da UPA de Pajuçara - 6h30"],
    "2024-09-15": ["Reunião com apoiadores na Cidade Alta - 11h"],
    "2024-09-16": ["Panfletagem nas proximidades do Hospital dos Pescadores - 6h", "Panfletagem nas proximidades da Feira das Rocas - 7h", "Ato público dos profissionais da educação na Governadoria - 9h", "Reunião com equipe de coordenação de campanha - 17h"],
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

// ROLAGEM

document.querySelector('a[href="#conhecaCandidaturas"]').addEventListener('click', function(event) {
     event.preventDefault();
     const targetSection = document.querySelector('#conhecaCandidaturas');
     const offset = 100; // ajuste conforme necessário
     const topPosition = targetSection.offsetTop - offset;

     window.scrollTo({
         top: topPosition,
         behavior: 'smooth'
     });
 });

 document.querySelector('a[href="#cartilha"]').addEventListener('click', function(event) {
    event.preventDefault();
    const targetSection = document.querySelector('#cartilha');
    const offset = 200; // ajuste conforme necessário
    const topPosition = targetSection.offsetTop - offset;

    window.scrollTo({
        top: topPosition,
        behavior: 'smooth'
    });
});

// COPIAR PIX
document.getElementById('copyLink').addEventListener('click', function(event) {
    event.preventDefault(); 
    
    const textToCopy = '56.256.408/0001-83';
  
    // Verifica se a API Clipboard está disponível
    if (navigator.clipboard && navigator.clipboard.writeText) {
        navigator.clipboard.writeText(textToCopy).then(function() {
            console.log('Texto copiado com sucesso!');
            document.getElementById('successMessage').style.display = 'block';
            document.getElementById('overlay').style.display = 'block';
        }).catch(function(error) {
            console.error('Erro ao copiar o texto: ', error);
        });
    } else {
        console.error('A API Clipboard não é suportada neste navegador.');
        alert('Seu navegador não suporta a funcionalidade de copiar para a área de transferência.');
    }
  });
  
  document.addEventListener('click', function(event) {
    if (event.target.id !== 'copyLink' && event.target.id !== 'successMessage') {
        document.getElementById('successMessage').style.display = 'none';
        document.getElementById('overlay').style.display = 'none';
    }
  });


