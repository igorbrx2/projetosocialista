<!DOCTYPE html>
<html lang="pt-BR">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Projeto Socialista</title>
  <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/global.css" />
  <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/style.css" />
  <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/responsivo.css" />

  <link rel="icon" href="<?php echo get_stylesheet_directory_uri(); ?>/assets/favicon.ico" type="image/x-icon">


  <!-- londrina font -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Londrina+Solid:wght@100;300;400;900&display=swap" rel="stylesheet">
  <!-- montserrat font -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">

  <?php wp_head(); ?> 
  
</head>

<body>

  <!-- MENU -->
  <header id="cabecalho">
    <div class="logo"><a href="./"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/logo-pstu.png" alt=""></a></div>
    <nav>
      <ul id="nav-list" class="londrina-font">
        <li><a href="#manifesto">manifesto</a></li>
        <li><a href="#conhecaCandidaturas">candidatos</a></li>
        <li><a href="#agenda">agenda</a></li>
      </ul>

    </nav>
    <div class="mobile-menu">
      <div class="line1"></div>
      <div class="line2"></div>
      <div class="line3"></div>
    </div>
  </header>
  <!-- FIM DO MENU -->