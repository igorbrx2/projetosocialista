<?php
// Template Name: Page Home
?>

<?php get_header(); ?>

<!-- INTRODUÇÃO -->
<div id="introSlide">
  <div class="introNando montserrat-font slide">
    <h1><strong>16</strong><br><b>NATAL</b><br><span>SOCIALISTA</span></h1>
    <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/nandoTiago.png" alt="Nando Poeta e Tiago Silva">
  </div>

  <div class="introBancada montserrat-font slide">
    <h1><strong>16123</strong><br><b>TRABALHADORES</b><br><span>SOCIALISTAS</span><br><span class="noPoder">NO
        PODER</span></h1>
    <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/bancadaSocialista.png"
      alt="Bancada Socialista: Érica Guarani, Alexandre Guedes e José Jairan">
  </div>

  <div class="introLuciana montserrat-font slide">
    <h1><strong>16789</strong><br><b>MULHERES</b><br><span>SOCIALISTAS</span><br><span class="noPoder">NO PODER</span>
    </h1>
    <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/lucianaIntro.png" alt="Luciana Lima">
  </div>
</div>

<div class="whatsapp">
  <a href="https://wa.me/5584991334508" target="_blank"><img
      src="<?php echo get_stylesheet_directory_uri(); ?>/assets/botaoZap.png" alt="fale com a gente"></a>
</div>

<!-- FIM DA INTRO -->

<!-- NOVAS CANDIDATURAS -->
<?php
get_template_part('candidaturas');
?>

<!-- CONTRIBUIÇÃO FINANCEIRA -->
<!-- <section id="contribuicao">
    <div class="contribuicao montserrat-font">
      <h2>CONTRIBUIÇÃO FINANCEIRA</h2>
      <p>Copie o Pix ou Scaneie o QR Code</p>
    </div>
    <div class="QRCode">
      <div class="divCopiar">
      <a href="#" id="copyLink"><img class="copiar" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/btnCopiar.png" alt=""></a>
      <p class="montserrat-font">Pix: <b>56.256.408/0001-83</b></p>
      </div>
      <img class="QR" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/qrCodeContribuicao.png" alt="">
    </div>
  </section> -->

<!-- CARTILHA -->
<?php
get_template_part('propostas');
?>

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