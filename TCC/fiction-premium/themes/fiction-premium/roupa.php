<?php

session_start();
require_once "conexaobd.php";

$idroupa = $_GET["idroupa"];

//Informações
$sqlRoupa = mysqli_query($conn,"SELECT * from tbroupa where id_roupa = '".$idroupa."'");
$rsRoupa = mysqli_fetch_array($sqlRoupa);

//Seleção da Imagem
$sqlImg = mysqli_query($conn,"SELECT TO_BASE64(img_roupa) from tbroupa where id_roupa = '".$idroupa."'");
$rsImg = mysqli_fetch_array($sqlImg)[0];

//Categ
$sqlCateg = mysqli_query($conn, "SELECT nome_categ FROM tbcategoria, tbroupa where tbcategoria.id_categ = tbroupa.id_categ and id_roupa = '".$idroupa."'");
$rsCateg = mysqli_fetch_array($sqlCateg);

//Tags
$sqlTag = mysqli_query($conn, "SELECT nome_tag FROM tbtag, roupa_tag where tbtag.id_tag = roupa_tag.id_tag and roupa_tag.id_roupa = '".$idroupa."'");


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
    <title>Moda & Magia | Closet Virtual</title>
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


  <section class="blog-single">
    <!--Info-->
  	<div class="container">
  		<div class="row">
  			<div class="col-md-9">
          <div class="blog-single-content">
            <div class="blog-content-description">
              <a class="btn btn-default btn-main btn-closet" href="closet.php" role="button">Voltar</a>
							<!-- Header -->
              <h3 class="blog-inner-heading roupa-title"><?php echo $rsRoupa["nome_roupa"] ?></h4>
              <div class="blog-content-description">
                <a class="blog-hiperlink" href="alteracaoRoupa.php?idroupa=<?php echo $idroupa ?>">Alterar Informações da Roupa</a>
                <br>
                <a class="blog-hiperlink" href="deletar.php?op=roupa&idroupa=<?php echo $idroupa ?>" onclick="return confirm('Tem certeza que deseja deletar esta roupa?')">Deletar Roupa</a>
              </div>
							<!-- Conteúdo -->
							<div class="roupa-info">
								<div class="img">
									<div class="blog-img roupa-img">
										<img src="data:image/jpg;base64, <?php echo $rsImg ?>" />
									</div>
									</br>
                  <?php if($rsRoupa["bazar"] == "N"){ ?>
									<a class="btn btn-default btn-main btn-closet" href="adicionaBazar.php?idroupa=<?php echo $idroupa ?>" role="button">Colocar no Bazar</a>
                  <?php } elseif($rsRoupa["bazar"] == "S"){?>
                  <a class="btn btn-default btn-main btn-closet" href="retirarBazar.php?idroupa=<?php echo $idroupa ?>" role="button">Retirar do Bazar</a>
                  <?php } ?>
                </div>
								</br>
								<div class="info">
									<div class="blog-content-description">
										<h4 class="blog-inner-heading">Descrição</h4>
										<p class="blog-description"><?php echo $rsRoupa["descricao_roupa"] ?></p>
									</div>
									<div class="blog-content-description">
										<h4 class="blog-inner-heading">Categoria</h4>
										<p class="blog-description roupa-text"><?php echo $rsCateg["nome_categ"] ?></p>
									</div>
									<div class="blog-content-description">
										<h4 class="blog-inner-heading">Cor</h4>
										<p class="blog-description roupa-text"><?php echo $rsRoupa["cor_roupa"] ?></p>
									</div>
									<div class="blog-content-description">
										<h4 class="blog-inner-heading">Tamanho</h4>
										<p class="blog-description roupa-text"><?php echo $rsRoupa["tamanho_roupa"] ?></p>
									</div>
									<div class="blog-content-description">
										<h4 class="blog-inner-heading">Tags</h4>
										<?php while ($rsTag = mysqli_fetch_array($sqlTag)){ ?>
										<p class="blog-description tags"><?php echo $rsTag["nome_tag"] ?></p>
										<?php } ?>
									</div>
								</div>
							</div>

							<!-- Fim Conteúdo -->
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