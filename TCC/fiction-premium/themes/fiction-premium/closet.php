<?php

session_start();
require_once "conexaobd.php";

$id = $_SESSION["id"];

if (empty($_GET["categ"]) == true && empty($_GET["cor"]) == true && empty($_GET["tag"]) == true){
  //Roupas Geral
  $sqlRoupa = mysqli_query($conn,"SELECT * FROM tbroupa where id_user ='".$id."' and bazar = 'N'");

}

if (empty($_GET["tag"]) == false){
  //Roupas por Tag
  $tag = $_GET["tag"];
  $sqlRoupa = mysqli_query($conn, "SELECT * FROM tbroupa, roupa_tag where tbroupa.id_roupa = roupa_tag.id_roupa and tbroupa.bazar = 'N' and roupa_tag.id_tag = '".$tag."'");
}

if (empty($_GET["categ"]) == false){
  //Roupas por Categoria
  $categ = $_GET["categ"];
  $sqlRoupa = mysqli_query($conn, "SELECT * FROM tbroupa where id_categ = '".$categ."' and id_user = '".$id."' ");
}

if (empty($_GET["cor"]) == false){
  //Roupas por Cor
  $cor = $_GET["cor"];
  $sqlRoupa = mysqli_query($conn, "SELECT * FROM tbroupa where cor_roupa = '".$cor."' and id_user = '".$id."'");
}

//Null
$sqlNull = mysqli_query($conn,"SELECT * FROM tbroupa WHERE id_user = '".$id."' and bazar = 'N'");
$rsNull = mysqli_fetch_array($sqlNull);


//Categorias
$sqlCateg = mysqli_query($conn, "SELECT * FROM tbcategoria, tbroupa where tbcategoria.id_categ = tbroupa.id_categ and tbroupa.bazar = 'N' 
                          and id_user ='".$id."' GROUP BY nome_categ");


//Cores
$sqlCor = mysqli_query($conn, "SELECT cor_roupa FROM tbroupa where id_user = '".$id."' and bazar = 'N' GROUP BY cor_roupa");

//Tags
$sqlTags = mysqli_query($conn, "SELECT * FROM tbtag where id_user = '".$id."'");

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
          <div class="aba-closet aba" style="background-color: #111111;">
            <a href="closet.php">Seu Closet</a>
          </div>
          <div class="aba-agenda aba">
            <a href="agendaLooks.php">Seus Looks</a>
          </div>
          <div class="aba-agenda aba">
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

<script>
  var novaTag = document.getElementById("novaTag");
  novaTag.addEventListener("keyup", function(event)){
    if(event.keyCode === 13){
      document.getElementById("btnTag").click();
    }
  }
</script>

<section class="content">
  <div class="container">
    <div class="null-case">
      <?php
      if(is_null($rsNull)){
      ?>
      <h4 class="null-text">Parece que você ainda não tem roupas no seu closet! Que tal começar agora?</h4>
      </br>
      <a class="btn btn-default btn-main" href="adicionarRoupa.php" role="button">Adicionar Roupas</a>
      <?php
      } 
      else{
      ?>
    </div>
    
    
    <div class="closet">
      <!-- Filtros -->
      <div class="left-column">
        <h3>Filtrar</h3>
        <div class="filter">
          <h4>Tags</h4>
          <ul class="categorias">
            <li class="item"><a class="item-filter" href="closet.php">Todos</a></li>
            <li class="item">
              <form method="post" action="adicionaTag.php">
                <input type="text" name="nome_tag" id="novaTag" class="novaTag" placeholder="Adicione uma tag!">
                <input type="submit" id="btnTag" class="hidden">
              </form>
            </li>
            <?php while($rsTags = mysqli_fetch_array($sqlTags)){ ?>
            <li class="item"><a class="item-filter" href="closet.php?tag=<?php echo $rsTags["id_tag"] ?>"><?php echo $rsTags["nome_tag"] ?></a></li>
            <?php } ?>
          </ul>
        </div>
        </br>
        <div class="filter">
          <h4>Categorias</h4>
          <ul class="categorias">
            <li class="item"><a class="item-filter" href="closet.php">Todos</a></li>
            <?php while($rsCateg = mysqli_fetch_array($sqlCateg)){ ?>
            <li class="item"><a class="item-filter" href="closet.php?categ=<?php echo $rsCateg["id_categ"] ?>"><?php echo $rsCateg["nome_categ"] ?></a></li>
            <?php } ?>
          </ul>
        </div>
        </br>
        <div class="filter">
          <h4>Cor</h4>
          <ul class="cor">
            <li class="item"><a class="item-filter" href="closet.php">Todos</a></li>
            <?php while($rsCor = mysqli_fetch_array($sqlCor)){ ?>
            <li class="item"><a class="item-filter" href="closet.php?cor=<?php echo $rsCor["cor_roupa"] ?>"><?php echo $rsCor["cor_roupa"] ?></a></li>
            <?php } ?>
          </ul>
        </div>
      </div>
      <div class="main-closet">
        <div class="buttons-area">
          <a class="btn btn-default btn-main btn-closet" href="adicionarRoupa.php" role="button">Adicionar Mais Roupas</a>
          <a class="btn btn-default btn-main btn-closet" href="montagemLook.php" role="button">Monte um Look!</a>
        </div>
        
        <!-- Closet -->
        <div class="display-closet">
          <?php 
          while ($rsRoupa = mysqli_fetch_array($sqlRoupa)){
            //Seleção de Imagens
            $sqlImg = mysqli_query($conn,"SELECT TO_BASE64(img_roupa) FROM tbroupa WHERE id_roupa = '".$rsRoupa["id_roupa"]."'");
            $rsImg = mysqli_fetch_array($sqlImg); 
          ?>
          <div class="item-closet">
            <a href="roupa.php?idroupa=<?php echo $rsRoupa["id_roupa"] ?>">
              <img src="data:image/jpg;base64,<?php echo $rsImg["TO_BASE64(img_roupa)"] ?>" class="roupa-img-closet"/>
              <p class="roupa-legenda-closet"><?php echo $rsRoupa["nome_roupa"] ?></p>
            </a>
          </div>
          <?php } ?>
        </div>

      </div>
      <?php
        }
        ?>
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

  