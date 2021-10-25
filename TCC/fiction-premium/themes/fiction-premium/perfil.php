<?php

session_start();
require_once "conexaobd.php";

$id = $_SESSION["id"];

$sqlPerfil = mysqli_query($conn,"SELECT * from tbusuario where id_user = '$id'");
$rsPerfil = mysqli_fetch_array($sqlPerfil);

$sqlImg = mysqli_query($conn,"SELECT TO_BASE64(img_user) from tbusuario where id_user = '$id'");
$rsImg = mysqli_fetch_array($sqlImg)[0];

$sqlMedidas = mysqli_query($conn,"SELECT * from tbmedidas where  id_user = '$id'");
$rsMedidas = mysqli_fetch_array($sqlMedidas);


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
    <title>Moda & Magia | Perfil</title>
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

  <!-- Loader to display before content Load
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
  </div> -->


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
          <h1>PERFIL</h1>
        </div>
      </div>
    </div>
  </header>

  <!-- Profile Content -->
  <section class="blog-single">
    <!--Info-->
  	<div class="container">
  		<div class="row">
  			<div class="col-md-9">
          <div class="blog-single-content">
            <div class="blog-content-description">
              <h3 class="blog-inner-heading">Suas Informações</h4>
              <div class="blog-content-description">
                <a class="blog-hiperlink" href="alteracaoCadastro.php">Alterar Informações</a>
              </div>
              <div class="blog-img perfil-img">
                <img src="data:image/jpg;base64, <?php echo $rsImg ?>" />
              </div>
              </br>
              <div class="blog-content-description">
                <h4 class="blog-inner-heading">Seu Nome</h4>
                <p class="blog-description"><?php echo $rsPerfil["nome_user"] ?></p>
              </div>
              <div class="blog-content-description">
                <h4 class="blog-inner-heading">Seu Email</h4>
                <p class="blog-description"><?php echo $rsPerfil["email_user"] ?></p>
              </div>
              <div class="blog-content-description">
                <h4 class="blog-inner-heading">Seu Gênero</h4>
                <p class="blog-description">
                  <?php if($rsPerfil["genero_user"]=="F"){
                    echo "Feminino";
                  } 
                  elseif ($rsPerfil["genero_user"]=="M"){
                    echo "Masculino";
                  }
                  ?>
                </p>
              </div>
              <div class="blog-content-description">
                <h4 class="blog-inner-heading">Data de Nascimento</h4>
                <p class="blog-description"><?php echo $rsPerfil["datanasci_user"] ?></p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!--Medidas-->
    <div class="container">
  		<div class="row">
  			<div class="col-md-9">
          <div class="blog-single-content">
            <div class="blog-content-description">
            <h3 class="blog-inner-heading">Suas Medidas</h4>
              </br>
              <?php 
              if(is_null($rsMedidas)){
                  ?>
                  <div class="blog-content-description">
                    <p class="blog-description">Vai comprar uma roupa online e esqueceu suas medidas? Anote-as aqui e nunca mais tenha esse problema!</p>
                    <a class="blog-hiperlink" href="medidas.php">Adicione novas medidas</a>
                  </div>
                  <?php
              }
              else{
              ?>
              <!--
                altura	largura_ombros	busto	cintura	quadril	pe	comprimento_bracos	altura_pernas
              -->
                <div class="blog-content-description">
                  <a class="blog-hiperlink" href="alteracaoMedidas.php">Alterar medidas</a>
                </div>
                <div class="blog-content-description">
                  <p class="blog-description blog-description-darker">Altura:</h4>
                  <p class="blog-description"><?php echo $rsMedidas["altura"] ?> cm</p>
                </div>
                <div class="blog-content-description">
                  <p class="blog-description blog-description-darker">Largura dos Ombros:</h4>
                  <p class="blog-description"><?php echo $rsMedidas["largura_ombros"] ?> cm</p>
                </div>
                <div class="blog-content-description">
                  <p class="blog-description blog-description-darker">Busto:</h4>
                  <p class="blog-description"><?php echo $rsMedidas["busto"] ?> cm</p>
                </div>
                <div class="blog-content-description">
                  <p class="blog-description blog-description-darker">Cintura:</h4>
                  <p class="blog-description"><?php echo $rsMedidas["cintura"] ?> cm</p>
                </div>
                <div class="blog-content-description">
                  <p class="blog-description blog-description-darker">Quadril:</h4>
                  <p class="blog-description"><?php echo $rsMedidas["quadril"] ?> cm</p>
                </div>
                <div class="blog-content-description">
                  <p class="blog-description blog-description-darker">Tamanho do Pé:</h4>
                  <p class="blog-description"><?php echo $rsMedidas["pe"] ?> cm</p>
                </div>
                <div class="blog-content-description">
                  <p class="blog-description blog-description-darker">Comprimento dos Braços:</h4>
                  <p class="blog-description"><?php echo $rsMedidas["comprimento_bracos"] ?> cm</p>
                </div>
                <div class="blog-content-description">
                  <p class="blog-description blog-description-darker">Altura das Pernas:</h4>
                  <p class="blog-description"><?php echo $rsMedidas["altura_pernas"] ?> cm</p>
                </div>
              <?php
              }
              ?>
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