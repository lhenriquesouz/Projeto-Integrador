<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Four Team</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link rel="shortcut icon" href="<?php echo base_url('assets/img/ico2.ico'); ?>" type="image/x-icon">
  <link href="<?php echo base_url('assets/img/apple-touch-icon.png'); ?>" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <!-- <link href="assets/vendor/animate.css/animate.min.css" rel="stylesheet"> -->
  <link href="<?php echo base_url('assets/vendor/animate.css/animate.min.css'); ?>" rel="stylesheet">
  <link href="<?php echo base_url('assets/vendor/aos/aos.css') ?>" rel="stylesheet">
  <link href="<?php echo base_url('assets/vendor/bootstrap/css/bootstrap.min.css') ?>" rel="stylesheet">
  <link href="<?php echo base_url('assets/vendor/bootstrap-icons/bootstrap-icons.css') ?>" rel="stylesheet">
  <link href="<?php echo base_url('assets/vendor/boxicons/css/boxicons.min.css') ?>" rel="stylesheet">
  <link href="<?php echo base_url('assets/vendor/glightbox/css/glightbox.min.css') ?>" rel="stylesheet">
  <link href="<?php echo base_url('assets/vendor/remixicon/remixicon.css') ?>" rel="stylesheet">
  <link href="<?php echo base_url('assets/vendor/swiper/swiper-bundle.min.css') ?>" rel="stylesheet">
  <link href="<?php echo base_url('assets/css/font-awesome.min.css') ?>" rel="stylesheet">


  <!-- Template Main CSS File -->
  <link href="<?php echo base_url('assets/css/style.css'); ?>" rel="stylesheet">
</head>

<body>
  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top d-flex align-items-center ">
    <div class="container d-flex align-items-center justify-content-between">

      <h1 class="logo"><a href="<?php echo base_url('home') ?>"><img src="<?php echo base_url('assets/img/logo.png') ?>" alt=""> </a></h1>

      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="nav-link scrollto active" href="<?php echo base_url('home') ?>">Principal</a></li>
          <li><a class="nav-link scrollto" href="<?php echo base_url('home') ?>">Sobre</a></li>
          <li><a class="nav-link scrollto" href="<?php echo base_url('home') ?>">Serviços</a></li>
          <li><a class="nav-link scrollto" href="<?php echo base_url('home') ?>">Time</a></li>
          <li><a class="nav-link scrollto" href="<?php echo base_url('home') ?>">Contato</a></li>
          <?php if ($this->session->userdata("logado")) { ?>
            <li class="nav-item me-3 me-lg-0 dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-mdb-toggle="dropdown" aria-expanded="false">
                <?php
                if (strlen($this->session->userdata("nome")) > 10) {
                  echo strstr($this->session->userdata("nome"), ' ', true);
                } else {
                  echo $this->session->userdata("nome");
                } ?>
                <i class="fas fa-user"></i>
              </a>
              <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                <li>
                  <a class="dropdown-item" href="<?php echo base_url('dashboard'); ?>">Dashboard</a>
                </li>
                <li>
                  <a class="dropdown-item" href="<?php echo base_url('categoria'); ?>">Categorias</a>
                </li>
                <li>
                  <a class="dropdown-item" href="<?php echo base_url('financa'); ?>">Finanças</a>
                </li>
                <li>
                  <hr class="dropdown-divider" />
                </li>
                <li>
                  <a class="dropdown-item" href="<?php echo base_url('usuario/logout') ?>">Sair</a>
                </li>
              </ul>
            </li>
          <?php } else { ?>
            <li><a class="nav-link scrollto login" href="<?php echo base_url('usuario/login') ?>">Login</a></li>
          <?php } ?>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->
    </div>
  </header><!-- End Header -->
  <?php $this->load->view('templates/mensagem'); ?>