<?php
// Template Name: Page Home
?>

<?php get_header(); ?>

<!-- INTRODUÇÃO -->
<div id="introSlide">
  <a href="/nandoetiago">
  <div class="introNando montserrat-font slide">
    <h1><strong>16</strong><br><b>NATAL</b><br><span>SOCIALISTA</span></h1>
    <img src="<?php the_field('tiagoenando-intro'); ?>" alt="Nando Poeta e Tiago Silva">
  </div>
  </a>

  <a href="/bancada">
  <div class="introBancada montserrat-font slide">
    <h1><strong>16123</strong><br><b>TRABALHADORES</b><br><span>SOCIALISTAS</span><br><span class="noPoder">NO PODER</span></h1>
    <img src="<?php the_field('bancada-intro'); ?>" alt="Bancada Socialista: Érica Guarani, Alexandre Guedes e José Jairan">
  </div>
  </a>

  <a href="/luciana">
  <div class="introLuciana montserrat-font slide">
    <h1><strong>16789</strong><br><b>MULHERES</b><br><span>SOCIALISTAS</span><br><span class="noPoder">NO PODER</span></h1>
    <img src="<?php the_field('luciana-intro'); ?>" alt="Luciana Lima">
  </div>
  </a>

</div>
<div id="slideControls">
  <span class="dot" onclick="currentSlide(0)"></span>
  <span class="dot" onclick="currentSlide(1)"></span>
  <span class="dot" onclick="currentSlide(2)"></span>
</div>

<div class="whatsapp">
  <a href="https://wa.me/5584991334508" target="_blank"><img
      src="<?php the_field('botaozap'); ?>" alt="fale com a gente"></a>
</div>

<!-- FIM DA INTRO -->

<!-- NOVAS CANDIDATURAS -->
<?php
get_template_part('candidaturas');
?>

<!-- CONTRIBUIÇÃO FINANCEIRA -->
<section id="contribuicao">
    <div class="contribuicao montserrat-font">
      <h2>CONTRIBUIÇÃO FINANCEIRA</h2>
      <p>Copie o Pix ou Scaneie o QR Code</p>
    </div>
    <div class="QRCode">
      <div class="divCopiar">
      <a href="#" id="copyLink"><img class="copiar" src="<?php the_field('btncopiar'); ?>" alt=""></a>
      <p class="montserrat-font">Pix: <b>56.404.907/0001-70</b></p>
      </div>
      <img class="QR" src="<?php the_field('qrcodecontribuicao'); ?>" alt="">
    </div>
  </section>

<!-- CARTILHA -->
<section id="cartilha" style="background-color:white;">
    <img src="<?php the_field('cartilhas'); ?>" alt="">
    <div class="propostas">
      <h1 class="montserrat-font" style="color: #434343;">ACESSE NOSSAS<br>PROPOSTAS</h1>
      <div class="btnPropostas">
        <a href="<?php echo get_stylesheet_directory_uri(); ?>/assets/projetoSocialistaNatal.pdf" download><img src="<?php the_field('btnbaixar'); ?>" alt=""></a>
        <a href="<?php echo get_stylesheet_directory_uri(); ?>/assets/projetoSocialistaNatal.pdf" target="_blank"><img src="<?php the_field('btnler'); ?>" alt=""></a>
      </div>
    </div>
  </section>

<!-- AGENDA -->
<div class="container" id="agenda">
  <div class="calendar">
    <div class="eventos"><span class="montserrat-font">EVENTOS</span></div>
    <div class="month">
      <i class="prev">❮</i>
      <div class="date">
        <h1></h1>
        <p class="montserrat-font"></p>
      </div>
      <i class="next">❯</i>
    </div>
    <div class="weekdays">
      <div>Dom</div>
      <div>Seg</div>
      <div>Ter</div>
      <div>Qua</div>
      <div>Qui</div>
      <div>Sex</div>
      <div>Sáb</div>
    </div>
    <div class="days"></div>
  </div>
  <div class="agenda">
    <div class="prox-eventos"><span class="montserrat-font">PRÓXIMOS EVENTOS</span></div>
    <div class="events montserrat-font" style="line-height: 1.1;"></div>
  </div>
</div>

<!-- Modal para a mensagem de sucesso -->
<div id="successMessage" class="montserrat-font">
  Código copiado com sucesso! Pague o PIX no aplicativo do seu banco.
</div>

<!-- Overlay para cobrir o fundo -->
<div id="overlay"
  style="display: none; position: fixed; top: 0; left: 0; width: 100%; height: 100%; background-color: rgba(0, 0, 0, 0.5); z-index: 999;">
</div>

<?php get_footer(); ?>