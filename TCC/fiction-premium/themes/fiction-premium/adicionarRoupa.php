<?php

session_start();

require_once "conexaobd.php";

$id = $_SESSION["id"];

$sqlTags = mysqli_query($conn,"SELECT * FROM tbtag WHERE id_user='$id'");
$sqlNullTags = mysqli_query($conn,"SELECT * FROM tbtag WHERE id_user='$id'");
$rsNullTags = mysqli_fetch_array($sqlNullTags);

$sqlCateg = mysqli_query($conn, "SELECT * FROM tbcategoria");


?>
<!doctype html>
<html class="no-js" lang="zxx">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Moda e Magia | Adicionar Roupa</title>
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

    <section class="blog-single">
      <div class="container">
        <div class="row">
            <div class="blog-single-content">
              <div class="blog-content-description">
								
								<form class="clothes-form" method="post" action="gravaRoupa.php?opcao=1" enctype="multipart/form-data">
									<div class="col-md-6">
										<div class="clothes-img">
											<label class="label-form">
												<span class="label-form">
													Foto da Roupa  
												</span>
												<input class="file-input is-large" type="file" name="img_roupa" >
												<span class="file-cta">
													<span class="file-icon">
														<i class="fas fa-upload"></i>
													</span>
												</span>
											</label>
										</div>

										<div class="clothes-info">
											<div class="form-group">
												<label class="label-form">Nome da Peça:</label>
												<input   type="text" name="nome_roupa" class="form-control" style="text-transform: capitalize">
											</div>
											</br>
                      <div class="form-group">
                        <label class="label-form">Tipo da Peça:</label></br>
                        <div class="radio-table">
                        <?php while($rsCateg = mysqli_fetch_array($sqlCateg)){ ?>
                          <div class="radio-categ">
                            <input  type="radio" name="categ_roupa" class="radio" value="<?php echo $rsCateg["id_categ"] ?>"> 
                            <label for="<?php echo $rsCateg["nome_categ"] ?>" class="radio-label" style="text-transform: capitalize"><?php echo $rsCateg["nome_categ"] ?></label>
                            
                          </div>
                        <?php } ?>
                        </div>
											</div>
											</br>
											<div class="form-group">
												<label class="label-form">Cor Predominante da Peça:</label>
												<input  type="text" name="cor_roupa" class="form-control" style="text-transform: capitalize">
											</div>
											</br>
											<div class="form-group">
												<label class="label-form">Tamanho da Peça:</label>
												<input  type="text" name="tamanho_roupa" class="form-control" style="text-transform:uppercase">
											</div>
											</br>
											<div class="form-group">
												<label class="label-form">Descrição da Peça:</label>
												<textarea   class="form-control" name="descricao_roupa" rows="3" ></textarea>
											</div>
											</br>
											<div class="">
                        <div class="tag-group">
                          <label class="label-form">Tags:</label>
                          </br>
                          <div class="tag-grid">
                          <?php
                            if (is_null($rsNullTags)){ ?>
                            <div class="null-case">
                              <p class="null-text"> Você ainda não tem Tags salvas! </p>
                            </div>
                            <?php }else{
                            while($rsTags = mysqli_fetch_array($sqlTags)){ ?>
                            <div class="tag-checkbox">
                                <span>
                                  <input  class="checkbox" type="checkbox" id="<?php echo $rsTags["id_tag"] ?>" name="tag[]" value="<?php echo $rsTags["id_tag"] ?>">
                                  <label for="<?php echo $rsTags["id_tag"] ?>" class="label-form tag-font"><?php echo $rsTags["nome_tag"] ?></label>
                                  </br>
                                </span>
                            </div>
                            <?php } 
                          } ?>
                          </div>
                        </div>
                      </div>
											</br>
                      <div class="col-md-12 form-group">
                        <input   type="submit" class="btn-main" value="Salvar">
                      </div>
										</div>
									</div>
								</form>


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