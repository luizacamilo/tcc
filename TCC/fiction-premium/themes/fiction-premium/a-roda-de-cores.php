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
    <title>Moda & Magia | A Roda de Cores</title>
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
      #map_canvas {
        height: 100%;
      }
    </style>
    <script src="plugins/modernizr.min.js"></script>
  </head>
  <body>
  <div class="loading">

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
  
  <!-- Blog Sections 
  =========================-->
  <section class="blog-single">
  	<div class="container">
  		<div class="row">
  			<div class="col-md-9">
				  <!-- Blog Left Sections 
				  =========================-->
            <!-- Single Blog Page Main Img
            ============================== -->
            <div class="blog-single-section-img">
              <img src="images/blog/roda-de-cores.jpg" alt="Blog Single Img">
            </div>
            <!-- Single Blog Page Main Content
            ================================== -->
            <div class="blog-single-content">
              <div class="blog-content-description">
                <h3 class="blog-content-title">A Roda de Cores: Como Combinar Pe??as Coloridas</h3>
                <div class="meta">
                  <div class="date">
                    <p>25 Nov 2021</p>
                  </div>
                  <div class="author">
                    <p>Por Pietra Dini</p>
                  </div>
                </div>
                <p class="blog-description">
                  Quando possu??mos muitas pe??as coloridas, fica dif??cil decobrir quais combinam. Com tantas possibilidades, ser?? que o vestido azul combina
                  com o salto laranja? Posso juntar dois tons de verde? Todas essas perguntas podem ser respondidas utilizando a teoria da roda de cores,
                  onde todas as cores podem se harmonizar de algum jeito.
                </p>
              </div>
              <div class="blog-content-description">
                <h4 class="blog-inner-heading">Aprenda a Combinar Cores e Estampas</h4>
                <p class="blog-description">
                  Por mais que pe??as b??sicas sejam essenciais, apostar em cores e estampas tamb??m ?? muito importante. Pe??as coloridas e estampadas s??o capazes
                  de dar um novo olhar para as combina????es e um destaque especial, al??m de mostrar personalidade. Utilizar cores e estampas no come??o pode ser
                  dif??cil, por isso, comece com combina????es b??sicas que fa??am com que voc?? se sinta confort??vel. Utilize uma pe??a estampada ou colorida junto de outra 
                  mais neutra e b??sica e comece a se acostumar com esses modelos. Depois combine estampas e cores entre si, para isso, utilize cores complementares
                  Seguindo as regras do c??rculo crom??tico, combinar cores opostas tamb??m resulta em bons resultados.
                </p>
              </div>
              <div class="blog-content-description">
                <h4 class="blog-inner-heading">O C??rculo Crom??tico</h4>
                <p class="blog-description">
                  Como j?? dito antes, as regras do c??rculo crom??tico auxiliam na cria????o de looks. Elas dizem que, basicamente, as cores se complementam de acordo com
                  sua posi????o no c??rculo: complementares, an??logas, ou tr??ades. Elas tamb??m podem ser categorizadas por temperatura, quente ou frio; ou por paletas b??sicas,
                   prim??rias e secund??rias.
                </p>
                <div class="blog-single-section-img">
                  <img src="images/blog/teoria-das-cores.png" alt="Blog Single Img">
                </div>
              </div>
            </div><!-- End Single Blog Content -->
          <!-- See All Post -->
          <div class="col-md-12">
            <div class="see-all-post text-center">
              <a class="btn btn-default th-btn solid-btn" href="blog.php" role="button"><i class="fa fa-long-arrow-left" aria-hidden="true"></i> Voltar ao Blog </a>
            </div>
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
