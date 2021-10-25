<?php

session_start();



if(isset($_SESSION["erro"])){
    $erro = $_SESSION["erro"];

}
else{
    $erro = 0;
    
}

if($_SESSION["logado"] == false){
    header("location: login.php");
}

else if($_SESSION["logado"] == true){
    ?>


<!doctype html>
<html class="no-js" lang="zxx">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Moda e Magia | Closet Virtual</title>
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


<header class="hero-area th-fullpage" data-parallax="scroll" data-image-src="images/slider/bg-2.jpeg">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <h1>MEU CLOSET</h1>
      </div>
    </div>
  </div>
</header>


  <section class="services">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="title text-center">
            <h2>Closet Virtual</h2>
          </div>
        </div>
      </div>
    </div>
  </section>

  
  <section></section>

  <section class="portfolio">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <!--<div class="protfolio-mixitup-btn text-center">
          <button class="filter btn btn-default btn-main active" data-filter="all">Todas as Roupas</button>
          <button class="filter btn btn-default btn-main" data-filter="category-1">Femininas</button>
          <button class="filter btn btn-default btn-main" data-filter="category-2">Masculinas</button>
          <button class="filter btn btn-default btn-main" data-filter="category-3">Crianças</button>
        </div>-->
        <div id="Container" class="filtr-container row">
          <div class="filtr-item col-md-4 col-sm-6 col-xs-12" data-category="category-1">
            <div class="portfolio-list">
              <a href="portfolio-single.html">
                <div class="th-mouse-portfolio-card">
                  <div class="thumbnail portfolio-thumbnail clothing-thumbnail">
                    <img src="images/bazar/bazar_vestido_praia.jpg" alt="Portfolio">
                    <!--<div class="caption portfolio-caption">
                      <h3 class="portfolio-title">Vestido de Praia</h3>
                      <p class="portfolio-subtitle">R$ 45,00</p>
                    </div>-->
                  </div>
                </div>
              </a>
            </div>
          </div>
          <div class="filtr-item col-md-4 col-sm-6 col-xs-12" data-category="category-2">
            <div class="portfolio-list">
              <a href="portfolio-single.html">
                <div class="th-mouse-portfolio-card">
                  <div class="thumbnail portfolio-thumbnail">
                    <img src="images/bazar/bazar_calca_jeans.jpg" alt="Portfolio">
                    <div class="caption portfolio-caption">
                      <h3 class="portfolio-title">Calça Jeans Preta</h3>
                      <p class="portfolio-subtitle">R$ 23,00</p>
                    </div>
                  </div>
                </div>
              </a>
            </div>
          </div>
          <div class="filtr-item col-md-4 col-sm-6 col-xs-12" data-category="category-3">
            <div class="portfolio-list">
              <a href="portfolio-single.html">
                <div class="th-mouse-portfolio-card">
                  <div class="thumbnail portfolio-thumbnail">
                    <img src="images/bazar/bazar_sand_hello_kitty.jpg" alt="Portfolio">
                    <div class="caption portfolio-caption">
                      <h3 class="portfolio-title">Sandalia Hello Kitty</h3>
                      <p class="portfolio-subtitle">R$ 40,00</p>
                    </div>
                  </div>
                </div>
              </a>
            </div>
          </div>
          <div class="filtr-item col-md-4 col-sm-6 col-xs-12" data-category="category-1">
            <div class="portfolio-list">
              <a href="portfolio-single.html">
                <div class="th-mouse-portfolio-card">
                  <div class="thumbnail portfolio-thumbnail">
                    <img src="images/bazar/bazar_vestido_azul.jpg" alt="Portfolio">
                    <div class="caption portfolio-caption">
                      <h3 class="portfolio-title">Vestido de Noite Azul</h3>
                      <p class="portfolio-subtitle">R$ 50,00</p>
                    </div>
                  </div>
                </div>
              </a>
            </div>
          </div>
          <div class="filtr-item col-md-4 col-sm-6 col-xs-12" data-category="category-2">
            <div class="portfolio-list">
              <a href="portfolio-single.html">
                <div class="th-mouse-portfolio-card">
                  <div class="thumbnail portfolio-thumbnail">
                    <img src="images/bazar/bazar_camiseta_azul.jpg" alt="Portfolio">
                    <div class="caption portfolio-caption">
                      <h3 class="portfolio-title">Camiseta Masculina Azul</h3>
                      <p class="portfolio-subtitle">R$ 25,00</p>
                    </div>
                  </div>
                </div>
              </a>
            </div>
          </div>
          <div class="filtr-item col-md-4 col-sm-6 col-xs-12" data-category="category-3">
            <div class="portfolio-list">
              <a href="portfolio-single.html">
                <div class="th-mouse-portfolio-card">
                  <div class="thumbnail portfolio-thumbnail">
                    <img src="images/bazar/bazar_vestido_crianca.jpg" alt="Portfolio">
                    <div class="caption portfolio-caption">
                      <h3 class="portfolio-title">Vestido Rosa Pink</h3>
                      <p class="portfolio-subtitle">R$ 38,00</p>
                    </div>
                  </div>
                </div>
              </a>
            </div>
          </div>
        </div>
      </div>
    </div>


    <div class="col-md-3">
      <div class="blog-sidbar">
        <div class="related-post widgets">
          <div class="list-group">
            <div class="list-group-item active text-center">
            Postagens relacionadas
            </div>
            <a href="#" class="list-group-item">
              <div class="media">
                <div class="media-left media-middle"><p class="post-count">1</p></div>
                <div class="media-body">
                  <p>Tipografia para blogs de moda!</p>
                </div>
              </div>
            </a>
            <a href="#" class="list-group-item">
              <div class="media">
                <div class="media-left media-middle"><p class="post-count">2</p></div>
                <div class="media-body">
                  <p>Typography is  important fact for liusto odio dolore.</p>
                </div>
              </div>
            </a>
            <a href="#" class="list-group-item">
              <div class="media">
                <div class="media-left media-middle"><p class="post-count">3</p></div>
                <div class="media-body">
                  <p>Typography is  important fact for liusto odio dolore.</p>
                </div>
              </div>
            </a>
            <a href="#" class="list-group-item">
              <div class="media">
                <div class="media-left media-middle"><p class="post-count">4</p></div>
                <div class="media-body">
                  <p>Typography is  important fact for liusto odio dolore.</p>
                </div>
              </div>
            </a>
          </div>
      </div>
    </div>


  </div>
</section>




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

<?php 
}
?>

  