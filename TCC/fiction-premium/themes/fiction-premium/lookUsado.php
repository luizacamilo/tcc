<?php

session_start();
require_once "conexaobd.php";

$id = $_SESSION["id"];

//Null
$sqlNull = mysqli_query($conn,"SELECT * FROM tbagendamento WHERE id_user = '".$id."'");
$rsNull = mysqli_fetch_array($sqlNull);


//Agenda
$sqlAgenda = mysqli_query($conn,"SELECT * FROM tbagendamento where id_user ='".$id."' and data_agenda < CURRENT_TIMESTAMP() ORDER BY data_agenda DESC");


//Looks
$sqlLook = mysqli_query($conn, "SELECT * FROM tbroupa, roupa_agenda where tbroupa.id_roupa = roupa_agenda.id_roupa");





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


<header class="hero-area th-fullpage" data-parallax="scroll" data-image-src="images/slider/bg-closet.jpeg">
<div class="container">
  <div class="row">
    <div class="col-md-12">
      <h1></h1>
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
        <div class="abas">
          <div class="aba-closet aba">
            <a href="closet.php">Seu Closet</a>
          </div>
          <div class="aba-agenda aba">
            <a href="agendaLooks.php">Seus Looks</a>
          </div>
          <div class="aba-agenda aba" style="background-color: #111111;">
            <a href="lookUsado.php">Looks Usados</a>
          </div>
          <div class="aba-agenda aba">
            <a href="inseridosBazar.php">À Venda</a>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<section class="content">
  <div class="container">
    <div class="null-case">
      <?php
      if(is_null($rsNull)){
      ?>
      <h4 class="null-text">Você não tem nenhum look pronto! Que tal montar um agora e não repetir aquela camiseta de semana passada?</h4>
      </br>
      <a class="btn btn-default btn-main" href="montagemLook.php" role="button">Criar um Novo Look</a>
      <?php
      } 
      else{ 
      ?>
    </div>
    
    <div class="agenda">
      <?php while($rsAgenda = mysqli_fetch_array($sqlAgenda)){ ?>
      <div class="section-agenda row">
        <div class="col-sm-4 d-flex section-content">
          <h3 class="data-usados"><?php echo $rsAgenda["data_agenda"] ?></h3>
        </div>
        <div class="col-sm-4 d-flex section-content">
          <p class="nome-evento"><?php echo $rsAgenda["evento_agenda"] ?></p>
        </div>
        <div class="look-roupas-miniature col-sm-4 d-flex section-content">
          <?php 
            $sqlImg = mysqli_query($conn,"SELECT TO_BASE64(img_roupa) FROM tbroupa, roupa_agenda WHERE tbroupa.id_roupa = roupa_agenda.id_roupa and roupa_agenda.id_agenda = '".$rsAgenda["id_agenda"]."'");
            
          while($rsImg = mysqli_fetch_array($sqlImg)){
          ?>
          <div class="roupa-miniature">
            <img class="miniature" src="data:image/jpg;base64,<?php echo $rsImg["TO_BASE64(img_roupa)"]?>">
          </div>
          <?php } ?>
        </div>
      </div>
      <?php } ?>
    </div>
    <?php } ?>
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
