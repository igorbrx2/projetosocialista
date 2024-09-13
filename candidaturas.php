<!-- candidaturas.php -->
<article id="conhecaCandidaturas">
    <h1 class="montserrat-font">CLIQUE EM CIMA E CONHEÇA</h1>
    <ul class="cardsCandidaturas">

    <a href="/nandoetiago/">
      <li>
          <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/cardPrefeitura.png" alt="Nando Poeta e Tiago Silva, candidatos a prefeitura do Natal" <?php if (is_page('nandoetiago')) { echo 'style="transform: scale(.95);filter: grayscale(80%);"'; } ?>>
      </li>
      </a>

    <a href="/bancada/">
      <li>
          <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/cardBancada.png" alt="Bancada Socialista: Érica Potyguara, José Jairan e Alexandre Guedes" <?php if (is_page('bancada')) { echo 'style="transform: scale(.95);filter: grayscale(80%);"'; } ?>>
      </li>
      </a>

      <a href="/luciana/">
      <li>
          <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/cardLuciana.png" alt="Luciana Lima, candidata a vereadora" <?php if (is_page('luciana')) { echo 'style="transform: scale(.95);filter: grayscale(80%);"'; } ?>>
      </li>
      </a>
    </ul>
</article>
