<?php
// Template Name: Page Luciana
?>

<?php get_header(); ?>

<article id="lucianaPage">
    <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/lucianaPagina.png" alt="Luciana Lima 16789">
    <div class="textoCandidato montserrat-font">
        <h1>Luciana Lima:</h1>
        <p>Sou Luciana Lima, tenho 54 anos. Atuo como professora da rede municipal de educação de Natal e sou aposentada da rede estadual. Formei-me em Pedagogia pela Universidade Federal do Rio Grande do Norte (UFRN) e tenho especialização em Psicopedagogia. Sou filha de um ex-fuzileiro naval e de uma dona de casa. Nasci em Natal e cresci no bairro das Quintas. Estudei nas escolas públicas Professora Maria Lídia, Escola Rotary, e fiz o Magistério no Instituto de Educação Superior Presidente Kennedy (IFESP).<br>

        <br>Como todo (a) filho e filha de trabalhadores (as), tive que trabalhar muito cedo para garantir pelo menos o ticket estudante para ir para a escola e para a universidade. Foi na universidade que comecei a compreender a importância da organização da classe trabalhadora. E quando me tornei funcionária pública, filiei-me ao Sindicato dos Trabalhadores em Educação do Rio Grande do Norte (Sinte/RN).<br>

        <br>Comecei minha militância política com um pé na Convergência Socialista e o outro no partido que estava surgindo: o PSTU. De lá para cá, muitas histórias foram construídas. Alguns atropelos, percalços, enfrentamentos e muitas lutas. Mas nunca deixei de acreditar e de lutar para construir e fortalecer a ferramenta que considero imprescindível para a transformação social: o partido revolucionário. A revolução não está sob o controle do PSTU. Porém, este é o partido que coloca o seu programa e seus militantes a serviço da construção de uma sociedade socialista, sem exploração e opressão.<br></p>
        <span class="propostas candidato" data-candidato="luciana">| Principais propostas |</span>
    </div>
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