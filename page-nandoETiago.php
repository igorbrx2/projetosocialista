<?php
// Template Name: Page Nando e Tiago
?>

<?php get_header(); ?>

<article id="nandoPage">
    <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/nandoPagina.png" alt="">
    <div class="textoCandidato montserrat-font">
        <h1>Nando Poeta:</h1>
        <p>Meu nome é Nando Poeta. Sou sociólogo, tenho 61 anos e nasci em Natal. Sou casado, pai de três filhos e avô. Já fui professor da rede privada e da rede pública do Estado de São Paulo, onde lecionava Sociologia. Atualmente, trabalho na Secretaria de Educação do Rio Grande do Norte e no Instituto Latino-Americano de Estudos Socioeconômicos (Ilaese). Sou cordelista com vários títulos publicados, muitos com temática político-social e um dos organizadores do Ponto de Memória Estação do Cordel.<br>

        <br>Iniciei minha militância política no movimento secundarista, na antiga Escola Técnica Federal. Ingressei no curso de Metalurgia, depois passei para o curso de Edificações. Foi nesse período que dei meus primeiros passos na luta estudantil, participando e apoiando uma chapa para o centro cívico. Fui trabalhar então na construção civil, onde tive contato com os operários e suas vivências. Em seguida, entrei para a Universidade Federal do Rio Grande do Norte (UFRN), onde conheci o movimento estudantil, no curso de Ciências Sociais. Integrei o Centro Acadêmico do meu curso e participei da ocupação da Reitoria em 1984.<br>

        <br>Em seguida, fui para o movimento sindical.Associei-me à antiga associação de professores do RN, APRN, em 1984; depois, fui para o Andes, que era a associação de servidores públicos estaduais. Fundamos o Sinsp, depois o Sinte, do qual fui diretor até 1997. Compus a Executiva da Central Única dos Trabalhadores (CUT) e, posteriormente, participei da construção da CSP-Conlutas e do Movimento Muda Sinte (MMS). Sou militante socialista há mais de 40 anos, 30 destes no PSTU, desde a histórica Convergência Socialista (CS), organização trotskista que deu origem ao meu partido e a diversas outras organizações de esquerda.</p>
        <span class="propostas candidato" data-candidato="nando">| Principais propostas |</span>
    </div>
</article>

<article id="tiagoPage">
    <div class="textoCandidato montserrat-font">
        <h1>Tiago Silva:</h1>
        <p>Meu nome é Tiago, sou natural de Natal/RN e moro no bairro Bom Pastor, na zona Oeste da cidade. Sou jornalista na Poti Comunicação e estudante de Licenciatura em Teatro na Universidade Federal do Rio Grande do Norte (UFRN). Também sou poeta, escritor, ator e performer. Em 2019, lancei meu primeiro zine, “Sangria”, e tenho contos e crônicas publicados em sites. Faço parte do Movimento Slam Rima Central, que promove batalhas de poesia, e sou um dos fundadores do coletivo LGBTI Auroras.<br>

        <br>Conheci o PSTU em 2014, durante o programa semestral de TV (que hoje não temos mais). Esse partido me chamou atenção pela sua defesa de um modelo diferente de sociedade, o socialismo, e então comecei a acompanhá-lo pela internet. Ainda em 2014, nas eleições gerais, votei pela primeira vez para presidente no candidato do partido, Zé Maria à época, e também nos demais candidatos da legenda. E, em 2016, passei a militar organicamente, onde estou até hoje.<br>

        <br>O PSTU foi fundamental na minha vida. Foi o partido que ampliou minha visão de mundo. Passei então a entender que meu contexto social não era normal, como morar num bairro periférico estigmatizado e esquecido pelos governos, usar serviços públicos precários e presenciar a violência urbana diária, com vários jovens da minha geração nos deixando. É para denunciar esses problemas da sociedade capitalista e para fortalecer a luta da nossa classe que estou junto com minhas companheiras e companheiros do PSTU nestas eleições.</p>
        <span class="propostas candidato" data-candidato="tiago">| Principais propostas |</span>
    </div>
    <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/tiagoPagina.png" alt="">
</article>

<?php
get_template_part('candidaturas');
?>

<?php
  get_template_part('propostas');
  ?>

<!-- Modal para textos dos candidatos -->
<section class="modalNando-container" id="modal" style="position: fixed;
  top: 0;
  left: 0;
  height: 100%;
  width: 100%;
  background: rgba(0, 0, 0, 0.5);
  display: none;
  z-index: 999;
  justify-content: center;
  align-items: center;">
    <div class="modalNando" style="background: white;
  text-align: start;
  height: 70vh;
  width: 800px;
  max-width: 90vw;
  overflow-y: auto;
  padding: 50px 30px;
  border-radius: 10px;
  justify-content: center;
  align-items: center;
  box-shadow: 10px 10px 22px -3px rgba(0,0,0,0.4);
  position: relative;">
      <button data-modal="fechar" class="botaoFechar" id="fecharModal" style="background: var(--vermelho-fonte);
  color: white;
  font-weight: bold;
  border-style: none;
  position: absolute;
  z-index: 9999;
  padding: 5px 10px;
  border-radius: 10px;
  top: 10px;
  right: 10px;">fechar</button>
      <div id="modalConteudo">

      </div>
    </div>
  </section>


<?php get_footer(); ?>