<?php

session_start();



if(isset($_SESSION["erro"])){
    $erro = $_SESSION["erro"];

}
else{
    $erro = 0;
    
}
?>
<!doctype html>
<html class="no-js" lang="zxx">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Moda & Magia | Home</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="apple-touch-icon" href="apple-touch-icon.png">
    <!-- Place favicon.ico in the root directory -->

    <link rel="stylesheet" href="plugins/bootstrap/bootstrap.min.css">
    <!-- ThemeFisher Icon -->
    <link rel="stylesheet" href="plugins/themefisher-fonts/themefisher-fonts.css">
    <!-- Light Box -->
    <link rel="stylesheet" href="plugins/magnific-popup/magnific-popup.css">
    <!-- animation css -->
    <link rel="stylesheet" href="plugins/animate/animate.css">
    <!-- slick slider -->
    <link rel="stylesheet" href="plugins/slick/slick.css">

    <!-- Revolution Slider -->
    <link rel="stylesheet" href="css/style.css">

    <!-- Link do icone -->
    <link rel="icon" href="images/icones/icone_mm_black_recortado.png" />

    <style>
      /* Always set the map height explicitly to define the size of the div
       * element that contains the map. */
      #map_canvas {
        height: 100%;
      }
      /* Optional: Makes the sample page fill the window. */
    </style>
    <script src="plugins/modernizr.min.js"></script>
  </head>
  <body>
    <!--[if lt IE 8]>
      <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
    <![endif]-->

  <!-- Loader to display before content Load-->
  <div class="loading">

    <!-- <img src="img/loader.gif" alt=""> -->

    <div class="windows8 loading-position">
      <div class="wBall" id="wBall_1">
        <div class="wInnerBall"></div>
      </div>
      <div class="wBall" id="wBall_2">
        <div class="wInnerBall"></div>
      </div>
      <div class="wBall" id="wBall_3">
        <div class="wInnerBall"></div>
      </div>
      <div class="wBall" id="wBall_4">
        <div class="wInnerBall"></div>
      </div>
      <div class="wBall" id="wBall_5">
        <div class="wInnerBall"></div>
      </div>
    </div>
  </div> 


  <nav class="navbar navbar-fixed-top navigation" >
    <div class="container">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <a href="index.php">
          <h3>Moda & Magia</h3>
        </a>
      </div>
      <div class="collapse navbar-collapse navbar-ex1-collapse">
        <ul class="nav navbar-nav navbar-right menu">
          <li><a href="index.php">Home</a></li>
          <li><a href="closet.php">Closet Virtual</a></li>
          <li><a href="blog.php">Blog</a></li>
          <li><a href="bazar.php">Bazar</a></li>
          <li><a href="contact.php">Contato</a></li>
          <li><a href="perfil.php" >Perfil</a></li>
          <?php 
            if($_SESSION["logado"] == true){
              ?>
              <li><a href="sair.php" >Sair</a></li>
              <?php
          }
          ?>
        </ul>
      </div>
    </div>
  </nav>


  <header class="hero-area th-fullpage" data-parallax="scroll" data-image-src="images/slider/bg-home.jpeg">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <h1></h1>
        </div>
      </div>
    </div>
  </header>
  

  <section class="case-study">
    <div class="text-center">
      <h2 class="title">Nossos Serviços</h2>
    </div>
    <!-- Case Study Description
      top section -->
    <div class="case-study-content">
      <div class="container">
        <div class="row">
          <div class="col-md-6">
            <!-- inner sub-title -->
            <div class="content">
              <h4 class="inner-title">Closet Virtual</h4>
              <p class="case-description">Tem dificuldades na hora de decidir os looks para utilizar na 
                festa de aniversário de 7 anos do primo do seu namorado? Ou apenas tem receio de
                que pode estar utilizando 10% de todas as peças que voce tem dentro do seu armário? 
              </p>
              <p>
                O nosso Closet Virtual foi criado pensando justamente na pessoa que deseja ser organizada, porém precisa de uma ferramenta de auxílio para isso. 
                Com nossas tecnologias de ponta, conseguimos decidir um look por você de acordo com a ocasião, economizando, assim, tempo, esforço mental e 
                eliminando 99,9% das chances de você não estar preparada para qualquer tipo de evento!
              </p>
              <!-- Entrar No Closet -->
              <a class="btn btn-default btn-main" href="closet.php" role="button">Acesse nosso Closet!</a>
            </div>
          </div>
          <div class="col-md-6">
            <div class="img-content">
              <!-- add imagem de closet ou armario -->
              <img class="img-responsive" src="images/case-study/closet.jpg" alt="">
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Case Study Description
      bottom section -->
    <div class="case-study-content">
      <div class="container">
        <div class="row">
          <div class="col-md-6">
            <div class="img-content">
              <!-- add imagem de pc blog -->
              <img class="img-responsive" src="images/case-study/blog.jpg" alt="">
            </div>
          </div>
          <div class="col-md-6">
            <!-- inner sub-title -->
            <div class="content">
              <h4 class="inner-title">Blog Fashionista</h4>
              <p class="case-description">Acha que sabe tudo de moda e do mundo fashion? O que acha de compartilhar seus conhecimentos com todo o mundo? Que tal participar ativamente de nosso Blog?</p>
              <p>
                Diariamente, novos posts são criados para ajudar você a se antenar ao mundo da moda! Qual as cores da nova estação, o que vestir para um casamento, e até mesmo dicas de costura. O que está esperando para participar?
              </p>
              <!-- View More Details -->
              <a class="btn btn-default btn-main" href="blog.php" role="button">Entrar no Blog</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  


  <!-- <section class="clients-logo" data-parallax="scroll" data-image-src="images/slider/bg-2.jpeg">
    <div class="section">
      <div class="title text-center">
        <h2>Bazar</h2>
      </div>
      <div class="container">
        <div class="row">
          <div class="col-md-4 block text-center">
            <img src="images/clients-logo/client-logo-1.png" alt="Client Logo">
          </div>
          <div class="col-md-4 block text-center">
            <img src="images/clients-logo/client-logo-2.png" alt="Client Logo">
          </div>
          <div class="col-md-4 block text-center">
            <img src="images/clients-logo/client-logo-3.png" alt="Client Logo">
          </div>
        
          <div class="col-md-4 block text-center">
            <img src="images/clients-logo/client-logo-4.png" alt="Client Logo">
          </div>
          <div class="col-md-4 block text-center">
            <img src="images/clients-logo/client-logo-5.png" alt="Client Logo">
          </div>
          <div class="col-md-4 block text-center">
            <img src="images/clients-logo/client-logo-6.png" alt="Client Logo">
          </div>
        </div>
      </div>
    </div>
  </section>  -->


  <!-- Team Sections
  =========================-->
  <section class="team">
    <div class="container-fluid padding-0">
    <!-- Team title -->
    <div class="title text-center">
      <h2>Nossa Equipe de Desenvolvedoras</h2>
    </div>
    <div class="col-md-4 col-lg-3 padding-0">
      <div class="team-member">
        <div class="th-mouse-effect">
          <div class="team-img">
            <img src="images/team/b2.jpeg" alt="Team img">
          </div>
          <div class="overlay text-center">
            <div class="content">
              <h4>Bianca Renesto</h4>
              <span>Aluna do 3 ano de desenvolvimento de sistemas</span>
              <p>Ultimo ano do curso de desenvolvimento de sistemas integrado ao ensino medio na ETEC de Guarulhos</p>
              
            </div>
            <div class="social-media">
              <li><a href="#"><i class="tf-ion-social-facebook" aria-hidden="true"></i></a></li>
              <li><a href="#"><i class="tf-ion-social-twitter" aria-hidden="true"></i></a></li>
              <li><a href="#"><i class="tf-ion-social-linkedin-outline" aria-hidden="true"></i></a></li>
              <li><a href="#"><i class="tf-ion-social-instagram-outline" aria-hidden="true"></i></a></li>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="col-md-4 col-lg-3 padding-0">
      <div class="team-member">
        <div class="th-mouse-effect">
          <div class="team-img">
            <img src="images/team/b1.jpeg" alt="Team img">
          </div>
          <div class="overlay text-center">
            <div class="content">
              <h4>Bianca Oliveira</h4>
              <span>Aluna do 3 ano de desenvolvimento de sistemas</span>
              <p>Ultimo ano do curso de desenvolvimento de sistemas integrado ao ensino medio na ETEC de Guarulhos</p>
              
            </div>
            <div class="social-media">
              <li><a href="#"><i class="tf-ion-social-facebook" aria-hidden="true"></i></a></li>
              <li><a href="#"><i class="tf-ion-social-twitter" aria-hidden="true"></i></a></li>
              <li><a href="#"><i class="tf-ion-social-linkedin-outline" aria-hidden="true"></i></a></li>
              <li><a href="#"><i class="tf-ion-social-instagram-outline" aria-hidden="true"></i></a></li>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="col-md-4 col-lg-3 padding-0">
      <div class="team-member">
        <div class="th-mouse-effect">
          <div class="team-img">
            <img src="images/team/l1.jpeg" alt="Team img">
          </div>
          <div class="overlay text-center">
            <div class="content">
              <h4>Luiza Camilo</h4>
              <span>Aluna do 3 ano de desenvolvimento de sistemas</span>
              <p>Ultimo ano do curso de desenvolvimento de sistemas integrado ao ensino medio na ETEC de Guarulhos</p>
              
            </div>
            <div class="social-media">
              <li><a href="#"><i class="tf-ion-social-facebook" aria-hidden="true"></i></a></li>
              <li><a href="#"><i class="tf-ion-social-twitter" aria-hidden="true"></i></a></li>
              <li><a href="#"><i class="tf-ion-social-linkedin-outline" aria-hidden="true"></i></a></li>
              <li><a href="#"><i class="tf-ion-social-instagram-outline" aria-hidden="true"></i></a></li>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="col-md-4 col-lg-3 padding-0">
      <div class="team-member">
        <div class="th-mouse-effect">
          <div class="team-img">
            <img src="images/team/p1.jpeg" alt="Team img">
          </div>
          <div class="overlay text-center">
            <div class="content">
              <h4>Pietra Dini</h4>
              <span>Aluna do 3 ano de desenvolvimento de sistemas</span>
              <p>Ultimo ano do curso de desenvolvimento de sistemas integrado ao ensino medio na ETEC de Guarulhos</p>
              
            </div>
            <div class="social-media">
              <li><a href="#"><i class="tf-ion-social-facebook" aria-hidden="true"></i></a></li>
              <li><a href="#"><i class="tf-ion-social-twitter" aria-hidden="true"></i></a></li>
              <li><a href="#"><i class="tf-ion-social-linkedin-outline" aria-hidden="true"></i></a></li>
              <li><a href="#"><i class="tf-ion-social-instagram-outline" aria-hidden="true"></i></a></li>
            </div>
          </div>
        </div>
      </div>
    </div>

    </div>
  </section>

<!-- Contact Us Sections
=========================-->


    <footer class="footer">
        <div class="container">
            <div class="row">
              <div class="text-center">
                  <div class="col-md-12">
                      <div class="copyright">
                          <p>&copy; 2019-2021 Todos os direitos reservados. <br></p>
                      </div>
                  </div>
              </div>
            </div>
        </div>
    </footer>


    <script src="plugins/jquery.min.js"></script>

    <script src="plugins/bootstrap/bootstrap.min.js"></script>
    <!-- slick slider -->
    <script src="plugins/slick/slick.min.js"></script>
    <!-- filter -->
    <script src="plugins/filterizr/jquery.filterizr.min.js"></script>
    <!-- Lightbox -->
    <script src="plugins/magnific-popup/jquery.magnific-popup.min.js"></script>
    <!-- Parallax -->
    <script src="plugins/parallax.min.js"></script>
    <!-- Video -->
    <script src="plugins/jquery.vide.js"></script>
    <!-- google map -->
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBu5nZKbeK-WHQ70oqOWo-_4VmwOwKP9YQ"></script>
    <script src="plugins/google-map/gmap.js"></script>

    <script src="js/script.js"></script>
    </body>

    </html>
