<?php
session_start();

require_once "conexaobd.php";

$id = $_SESSION["id"];





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
    <title>Moda & Magia | Adicone suas Medidas!</title>
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



<section class="blog-single">
  <div class="container">
    <div class="row">
      <div class="col-md-9">
        <div class="blog-single-content">
          <div class="blog-content-description">
            <h3 class="blog-inner-heading">Adicione suas medidas!</h4>
            <p class="blog-description">Lembre-se de colocar todas as medidas em cm (centímetros)!</p>
            <form class="measuring-form" method="post" action="gravaMedida.php?opcao=1">
              <!--
                altura	largura_ombros	busto	cintura	quadril	pe	comprimento_bracos	altura_pernas
              -->
              <div class="col-md-6">
                <div class="form-group">
                  <label class="label-form">Altura:</label>
                  <input type="text" name="altura" class="form-control" placeholder="ex.: 170">
                </div>
                </br>
                <div class="form-group">
                  <label class="label-form">Largura dos Ombros:</label>
                  <input type="text" name="largura_ombros" class="form-control" placeholder="">
                </div>
                </br>
                <div class="form-group">
                  <label class="label-form">Busto:</label>
                  <input type="text" name="busto" class="form-control" placeholder="">
                </div>
                </br>
                <div class="form-group">
                  <label class="label-form">Cintura:</label>
                  <input type="text" name="cintura" class="form-control" placeholder="">
                </div>
                </br>
                <div class="form-group">
                  <label class="label-form">Quadril:</label>
                  <input type="text" name="quadril" class="form-control" placeholder="">
                </div>
                </br>
                <div class="form-group">
                  <label class="label-form">Tamanho do Sapato:</label>
                  <input type="text" name="pe" class="form-control" placeholder="">
                </div>
                </br>
                <div class="form-group">
                  <label class="label-form">Comprimento dos Braço:</label>
                  <input type="text" name="comprimento_bracos" class="form-control" placeholder="">
                </div>
                </br>
                <div class="form-group">
                  <label class="label-form">Altura das Pernas:</label>
                  <input type="text" name="altura_pernas" class="form-control" placeholder="">
                </div>
                <div class="col-md-12 form-group">
                  <input type="submit" class="btn-main" value="Salvar">
                </div>
              </div>
            </form>
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



<?php
    
}

?>