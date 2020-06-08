<?php
/**
 * @link https://datacartes.com.br
 *
 * @package Data Cartês
 * @subpackage IEG
 * @since 1.0.0
 */
?><!doctype html>
<html>
<head>
  <meta charset="utf-8">
  <title><?php the_title(); ?></title>
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta content="" name="keywords">
  <meta content="" name="description">

  <!-- Favicons -->
  <link href="  /img/favicon.png" rel="icon">
  <link href="<?php echo get_template_directory_uri(); ?>/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Montserrat:300,400,500,700" rel="stylesheet">

  <!-- Bootstrap CSS File -->
  <link href="<?php echo get_template_directory_uri(); ?>/lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Libraries CSS Files -->
  <link href="<?php echo get_template_directory_uri(); ?>/lib/font-awesome/css/font-awesome.min.css" rel="stylesheet">
  <link href="<?php echo get_template_directory_uri(); ?>/lib/animate/animate.min.css" rel="stylesheet">
  <link href="<?php echo get_template_directory_uri(); ?>/lib/ionicons/css/ionicons.min.css" rel="stylesheet">
  <link href="<?php echo get_template_directory_uri(); ?>/lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
  <link href="<?php echo get_template_directory_uri(); ?>/lib/lightbox/css/lightbox.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

  <!-- Main Stylesheet File -->
  <link href="<?php echo get_template_directory_uri(); ?>/style.css" rel="stylesheet">

  <!-- =======================================================
    Theme Name: Data Cartês
    Theme URL: datacartes.com.br
    Author: Paloma Menezes
  ======================================================= -->

   <!-- Uncomment below i you want to use a preloader -->
  <!-- <div id="preloader"></div> -->

  <!-- JavaScript Libraries -->
  <script src="<?php echo get_template_directory_uri(); ?>/lib/jquery/jquery.min.js"></script>
  <script src="<?php echo get_template_directory_uri(); ?>/lib/jquery/jquery-migrate.min.js"></script>
  <script src="<?php echo get_template_directory_uri(); ?>/lib/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="<?php echo get_template_directory_uri(); ?>/lib/easing/easing.min.js"></script>
  <script src="<?php echo get_template_directory_uri(); ?>/lib/mobile-nav/mobile-nav.js"></script>
  <script src="<?php echo get_template_directory_uri(); ?>/lib/wow/wow.min.js"></script>
  <script src="<?php echo get_template_directory_uri(); ?>/lib/waypoints/waypoints.min.js"></script>
  <script src="<?php echo get_template_directory_uri(); ?>/lib/counterup/counterup.min.js"></script>
  <script src="<?php echo get_template_directory_uri(); ?>/lib/owlcarousel/owl.carousel.min.js"></script>
  <script src="<?php echo get_template_directory_uri(); ?>/lib/isotope/isotope.pkgd.min.js"></script>
  <script src="<?php echo get_template_directory_uri(); ?>/lib/lightbox/js/lightbox.min.js"></script>
  <!-- Contact Form JavaScript File -->
  <script src="<?php echo get_template_directory_uri(); ?>/contactform/contactform.js"></script>

  <!-- Template Main Javascript File -->
  <script src="<?php echo get_template_directory_uri(); ?>/js/main.js"></script>

  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>

  <!-- Script dos Ícones Bootstrap -->
  <script src="https://unpkg.com/ionicons@4.5.10-0/dist/ionicons.js"></script>

  <script type="text/javascript">
  $('.carousel').carousel()

  // optional
    $('#treinamentosCarousel').carousel({
        interval: 5000
    });
  </script>

  <script src="<?php echo get_template_directory_uri(); ?>/js/funcoes.js"></script>
</head>

<body>
<main>

		<header id="header">
    <div class="container container-top-bar">
      <div class="row bar">
        <div class="col-md-12 top-bar">
          <ul>
            <li><a href="<?php echo get_site_url(); ?>/para-voce" style="color:#fff;">Para Você</a></li>
            <li><a href="<?php echo get_site_url(); ?>/trabalhe-conosco" style="color:#fff;">Trabalhe Conosco</a></li>
            <li><a href="<?php echo get_site_url(); ?>/contato" style="color:#fff;">Contato</a></li>
          </ul>
        </div>
      </div>
    </div>
</header>

<div id="menu">
    <div class="container">
      <div class="row">
      <div class="logo float-left">
        <!-- Uncomment below if you prefer to use an image logo -->
        <!-- <h1 class="text-light"><a href="#header"><span>NewBiz</span></a></h1> -->
        <a href="<?php echo get_site_url(); ?>" class="scrollto logo-ieg"><img src="<?php echo get_template_directory_uri(); ?>/img/logo-ieg.png"></a>
      </div>

      <nav class=" main-nav float-right d-none d-lg-block menu">
        <ul>
          <li><a href="<?php echo get_site_url(); ?>/pesquisa">Pesquisa</a></li>
          <li><a href="<?php echo get_site_url(); ?>/consultoria">Consultoria</a></li>
          <li><a href="<?php echo get_site_url(); ?>/eventos-e-treinamentos">Eventos e treinamentos</a></li>
          <li><a href="<?php echo get_site_url(); ?>/relatorios-e-publicacoes">Relatórios e Publicações</a></li>
          <li><a href="<?php echo get_site_url(); ?>/csc">CSC</a></li>
        </ul>
      </nav><!-- .main-nav -->
       </div>
    </div>
  </div><!-- #header -->
</main>