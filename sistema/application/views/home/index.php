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
          <li><a class="nav-link scrollto" href="#about">Sobre</a></li>
          <li><a class="nav-link scrollto" href="#services">Serviços</a></li>
          <li><a class="nav-link scrollto" href="#team">Time</a></li>
          <li><a class="nav-link scrollto" href="#contact">Contato</a></li>
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

  <!-- ======= Hero Section ======= -->
  <section id="hero" class="d-flex justify-cntent-center align-items-center">
    <div id="heroCarousel" data-bs-interval="5000" class="container carousel carousel-fade" data-bs-ride="carousel">

      <!-- Slide 1 -->
      <div class="carousel-item active">
        <div class="carousel-container">
          <h2 class="animate__animated animate__fadeInDown">Bem Vindo</h2>
          <p class="animate__animated animate__fadeInUp">Seja bem vindo a FOURTEAM uma empresa que chegou para resolver seus problemas financeiros e assessorá-lo nos mais diversos serviços ligados a área de contabilidade. Abertura de Entidades, Contabilidade e assessoria fiscal, Recursos Humanos, dentre outros serviços especializados. </p>
          <a href="#about" class="btn-get-started animate__animated animate__fadeInUp scrollto">Ver mais</a>
        </div>
      </div>

    </div>
  </section><!-- End Hero -->

  <main id="main">

    <!-- ======= Icon Boxes Section ======= -->
    <section id="icon-boxes" class="icon-boxes">
      <div class="container">

        <div class="row row-card">
          <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0" style="height: 200px;" data-aos="fade-up">
            <div class="icon-box">
              <div class="icon"><i class="far fa-sticky-note"></i></div>
              <h4 class="title scrollto text-center"><a href="#services">Nossos serviços</a></h4>
              <p class="description text-white">Temos como prioridade fazer serviços altamente bons.</p>
            </div>
          </div>

          <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0" style="height: 200px;" data-aos="fade-up" data-aos-delay="100">
            <div class="icon-box">
              <div class="icon"><i class="fas fa-street-view"></i></div>
              <h4 class="title text-center"><a href="">Clientes Satisfeitos</a></h4>
              <p class="description text-white">Nossa teoria é cada vez mais fazer mais clientes felizes.</p>
            </div>
          </div>

          <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0" style="height: 200px;" data-aos="fade-up" data-aos-delay="200">
            <div class="icon-box">
              <div class="icon"><i class="fas fa-mobile-alt"></i></div>
              <h4 class="title text-center"><a href="">Suporte Online</a></h4>
              <p class="description text-white">Suporte 24h para que quaisquer duvidas sejam sanadas.</p>
            </div>
          </div>

          <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0" style="height: 200px;" data-aos="fade-up" data-aos-delay="300">
            <div class="icon-box ">
              <div class="icon"><i class="far fa-id-card"></i></div>
              <h4 class="title scrollto text-center"><a href="#team">Equipe Treinada</a></h4>
              <p class="description text-white">Com nossa equipe especializada conseguimos entregar resultados e eficiencia rápido e pratico.</p>
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Icon Boxes Section -->

    <!-- ======= About Us Section ======= -->
    <section id="about" class="about">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Sobre nós</h2>
          <p>A FOURTEAM constituída em 2021 por 4 sócios e amigos que tiveram o desejo de empreender no mercado das finanças, profissionais com experiência em assessoria empresarial e contábil. </p>
        </div>

        <div class="row content">
          <div class="col-lg-6">
            <p>
              A empresa é especializada na prestação de serviços nas áreas contábil, fiscal, trabalhista e consultoria
            </p>
            <ul>
              <li><i class="ri-check-double-line"></i> Missão: prestar serviços aos nossos clientes de qualidade</li>
              <li><i class="ri-check-double-line"></i> Visão: tornar-nos uma empresa inovadora e criativa</li>
              <li><i class="ri-check-double-line"></i> Objetivo: ajudar empresas a se tornarem organizadas no cumprimento dos seus deveres</li>
            </ul>
          </div>
          <div class="col-lg-6 pt-4 pt-lg-0">
            <p>
              Tem como objetivo o cuidado necessário à atividade empregando os atuais recursos de tecnologia em gestão empresarial, o que proporciona atendimento diferenciado e personalizado, de maneira prática, eficaz e segura, sempre tendo em vista o comprometimento com o resultado de seus clientes.
            </p>
            <a href="#" class="btn-learn-more">Ler Mais</a>
          </div>
        </div>

      </div>
    </section><!-- End About Us Section -->

    <!-- ======= Services Section ======= -->
    <section id="services" class="services">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Serviços</h2>
          <p>Prestamos serviços de Abertura de Entidades, Contabilidade e assessoria fiscal, Recursos Humanos, dentre outros serviços especializados.
          </p>
        </div>

        <div class="row">
          <div class="col-md-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="100">
            <div class="icon-box">
              <i class="fas fa-fingerprint"></i>
              <h4><a href="#">Abertura de Entidades</a></h4>
              <p>Tratamos de todo o processo de legalização das entidades comerciais ou industriais sejam elas em sociedade ou nome individual.</p>
            </div>
          </div>
          <div class="col-md-6 d-flex align-items-stretch mt-4 mt-md-0" data-aos="fade-up" data-aos-delay="200">
            <div class="icon-box">
              <i class="bi bi-bar-chart"></i>
              <h4><a href="#">Contabilidade e assessoria fiscal</a></h4>
              <p>Classificação da documentação e lançamentos contábeis de acordo com os princípios de contabilidade aceitos pelo Planos de Contas Oficial.</p>
            </div>
          </div>
          <div class="col-md-6 d-flex align-items-stretch mt-4 mt-md-0" data-aos="fade-up" data-aos-delay="300">
            <div class="icon-box">
              <i class="fas fa-chart-pie"></i>
              <h4><a href="#">Levantamento de Dados</a></h4>
              <p>Processamento e levantamento dos dados da empresa, classificados através do nosso sistema contábil.</p>
            </div>
          </div>
          <div class="col-md-6 d-flex align-items-stretch mt-4 mt-md-0" data-aos="fade-up" data-aos-delay="400">
            <div class="icon-box">
              <i class="fas fa-file-invoice-dollar"></i>
              <h4><a href="#">Fornecimento de Balancetes</a></h4>
              <p>Fornecemos balancetes, elaboramos mapas de demonstração de Resultados Mensais e Evolutivos da empresa.</p>
            </div>
          </div>
        </div>

      </div>
    </section><!-- End Services Section -->

    <!-- ======= Cta Section ======= -->
    <section id="cta" class="cta">
      <div class="container">

        <div class="row" data-aos="zoom-in">
          <div class="col-lg-9 text-center text-lg-start">
            <h3>Encontre-nos nas redes sociais</h3>
            <p> A nossa organização entende que as redes sociais são ferramentas muito importantes hoje em dia. Se você gostou do que viu, pode conferir mais através das nossas mídias clicando no botão ao lado.</p>
          </div>
          <div class="col-lg-3 cta-btn-container text-center">
            <a class="cta-btn align-middle" href="#">Clique aqui</a>
          </div>
        </div>

      </div>
    </section><!-- End Cta Section -->

    <!-- ======= Team Section ======= -->
    <section id="team" class="team section-bg">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Time</h2>
          <p>Consolidamos uma história de sucesso que inspira gerações. Com foco no atendimento personalizado, nossos profissionais buscam conhecer as expectativas dos clientes e incorporar suas diretrizes às rotinas de trabalho, sempre com o objetivo de encontrar a melhor solução legal para os desafios propostos. Profissionais com formação multidisciplinar e atuação integrada.</p>
        </div>

        <div class="row">

          <div class="col-lg-6" data-aos="fade-up" data-aos-delay="100">
            <div class="member d-flex align-items-start">
              <div class="pic" style="width:150px"><img src="assets/img/Carlin.jpeg" class="img-fluid" alt=""></div>
              <div class="member-info">
                <h4>Carlos Roberto</h4>
                <span>Gerente de controladoria</span>
                <p>Gerencia todas as partes de planejamento, execução e finanças na FOURTEAM.</p>
                </br>
                <div class="social">
                  <a href=""><i class="ri-twitter-fill"></i></a>
                  <a href=""><i class="ri-facebook-fill"></i></a>
                  <a href=""><i class="ri-instagram-fill"></i></a>
                  <a href=""> <i class="ri-linkedin-box-fill"></i> </a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-6 mt-4 mt-lg-0" data-aos="fade-up" data-aos-delay="200">
            <div class="member d-flex align-items-start">
              <div class="pic" style="width:90px"><img src="assets/img/Jader.jpg" class="img-fluid" alt=""></div>
              <div class="member-info">
                <h4>Jader Martins</h4>
                <span>Gerente de auditoria</span>
                <p>Atua nas normas legislativas da sua empresa;</p>
                </br>
                <div class="social">
                  <a href=""><i class="ri-twitter-fill"></i></a>
                  <a href=""><i class="ri-facebook-fill"></i></a>
                  <a href=""><i class="ri-instagram-fill"></i></a>
                  <a href=""> <i class="ri-linkedin-box-fill"></i> </a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-6 mt-4" data-aos="fade-up" data-aos-delay="300">
            <div class="member d-flex align-items-start">
              <div class="pic" style="width:230px"><img src="assets/img/LuisH.jpg" class="img-fluid" alt=""></div>
              <div class="member-info">
                <h4>Luis Henrique Souza</h4>
                <span>Gerente de contabilidade</span>
                <p>Gerencia as estratégias de negócios da sua empresa. Realiza previsões de orçamento, balancetes e acompanhamento da empresa.</p>
                <div class="social">
                  <a href=""><i class="ri-twitter-fill"></i></a>
                  <a href=""><i class="ri-facebook-fill"></i></a>
                  <a href=""><i class="ri-instagram-fill"></i></a>
                  <a href=""> <i class="ri-linkedin-box-fill"></i> </a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-6 mt-4" data-aos="fade-up" data-aos-delay="400">
            <div class="member d-flex align-items-start">
              <div class="pic" style="width:220px"><img src="assets/img/LuizF.jpg" class="img-fluid" alt=""></div>
              <div class="member-info">
                <h4>Luiz Felipe Gatto</h4>
                <span>Coordenador contábil</span>
                <p>Coordena a equipe de contadores e elabora as melhores estratégias de acordo com o perfil da sua empresa</p>
                </br>
                <div class="social">
                  <a href=""><i class="ri-twitter-fill"></i></a>
                  <a href=""><i class="ri-facebook-fill"></i></a>
                  <a href=""><i class="ri-instagram-fill"></i></a>
                  <a href=""> <i class="ri-linkedin-box-fill"></i> </a>
                </div>
              </div>
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Team Section -->

    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact justify-content-center">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Formulário de Contato</h2>
        </div>

        <div class="row mt-1 d-flex justify-content-center" data-aos="fade-right" data-aos-delay="100">

          <div class="col-lg-6 mt-5 mt-lg-0" data-aos="fade-left" data-aos-delay="100">
            <!-- role="form" -->
            <?php echo form_open('contato/enviarEmail'); ?>
            <div class="row">
              <div class="col-md-6 form-group">
                <input type="text" style="border: 2px solid var(--azul-medio);" name="nome" class="form-control" id="name" placeholder="digite seu nome" required>
              </div>
              <div class="col-md-6 form-group mt-3 mt-md-0">
                <input type="email" style="border: 2px solid var(--azul-medio);" class="form-control" name="email" id="email" placeholder="digite seu email" required>
              </div>
            </div>
            <div class="form-group mt-3">
              <textarea class="form-control" style="border: 2px solid var(--azul-medio); resize: none;" name="message" rows="5" placeholder="digite sua mensagem" required></textarea>
            </div>
            <!-- <div class="my-3">
              <div class="loading">Carregando</div>
              <div class="error-message"></div>
              <div class="sent-message">Sua mensagem foi enviada com sucesso!</div>
            </div> -->
            <!-- <div class="text-start"><button type="submit">Enviar mensagem</button></div> -->
            <input type="submit" class="btn btn-primary btn-lg mx-auto mt-2" value="Enviar">
            <?php echo form_close(); ?>
          </div>

        </div>

      </div>
    </section><!-- End Contact Section -->

  </main><!-- End #main -->
  <?php
  $this->load->view('/templates/footer.php');
  ?>