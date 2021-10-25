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
    <title>Moda & Magia | Blog</title>
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


  <header class="hero-area th-fullpage" data-parallax="scroll" data-image-src="images/slider/bg-blog.jpeg">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <h1></h1>
        </div>
      </div>
    </div>
  </header>

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

  

  <section class="blog">
    <div class="container">
      <div class="row">
        <div class="title text-center">
          <h2>Postagens Recentes</h2>
        </div>
        <div class="col-md-9">
          <div class="blog-list-section blog-content-right row">
            <div class="col-md-9 blog-content-area">
              <div class="blog-img">
                <img class="img-responsive" src="images/blog/blog-img1.jpeg" alt="">      
              </div>
              <div class="blog-content">
                <a href="blog-single.html"><h4 class="blog-title">Moda para mulheres com menos de 1,60m; <br /> Um tutorial por Elle Woods</h4></a>
                <div class="meta">
                  <div class="date">
                    <p>19</sup>de setembro de 2021</p>
                  </div>
                  <div class="author">
                    <p>por Luiza Camilo</p>
                  </div>
                </div>
                <p class="blog-decisions">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonum euismod tincidunt ut laoreet dolore magna autem vel eum iriure dolor in.</p>
                <a class="btn btn-default th-btn solid-btn" href="blog-single.html" role="button">Read More <i class="fa fa-long-arrow-right" aria-hidden="true"></i></a>
              </div>
            </div>
            </div>  
            <div class="blog-list-section blog-content-left row">
              <div class="col-md-9 blog-content-area">
                <div id="blog-slider" class="blog-slider">
                  <div class="item">
                    <div class="blog-img">
                      <img class="img-responsive" src="images/blog/blog-img2.jpg" alt="">
                    </div>
                  </div>
                  <div class="item">
                    <div class="blog-img">
                      <img class="img-responsive" src="images/blog/blog-img1.jpg" alt="">
                    </div>
                  </div>
                  <div class="item">
                    <div class="blog-img">
                      <img class="img-responsive" src="images/blog/blog-img3.jpg" alt="">
                    </div>
                  </div>
                </div>
                <div class="blog-content">
                  <a href="blog-single.html"><h4 class="blog-title">A Complete, Ranke Destinat Moines’ <br /> Good Bars.</h4></a>
                  <div class="meta">
                    <div class="date">
                      <p>22<sup>nd</sup>Jan 2016</p>
                    </div>
                    <div class="author">
                      <p>By Michal Lomans</p>
                    </div>
                  </div>
                  <p class="blog-description">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonum euismod tincidunt ut laoreet dolore magna autem vel eum iriure dolor in.</p>
                  <a class="btn btn-default th-btn solid-btn" href="blog-single.html" role="button">Read More <i class="fa fa-long-arrow-right" aria-hidden="true"></i></a>
                </div>
              </div>
            </div>  
            
            <div class="blog-list-section row">
              <div class="col-md-9 blog-content-area">
                <div class="video-section">
                  <img class="img-responsive" src="images/blog/blog-img3.jpg" alt="">
                  <div class="video-overlay">
                    <a id="th-video" class="th-video" href="blog-single.html"><i class="fa fa-play-circle-o" aria-hidden="true"></i></a>
                  </div>
                </div>
                <div class="blog-content">
                  <a href="blog-single.html"><h4 class="blog-title">A Complete, Ranke Destinat Moines’ <br /> Good Bars,Benefit of the t Media Elite</h4></a>
                  <div class="meta">
                    <div class="date">
                      <p>22<sup>nd</sup>Jan 2016</p>
                    </div>
                    <div class="author">
                      <p>By Michal Lomans</p>
                    </div>
                  </div>
                  <p class="blog-decisions">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonum euismod tincidunt ut laoreet dolore magna autem vel eum iriure dolor in.</p>
                  <a class="btn btn-default th-btn solid-btn" href="blog-single.html" role="button">Read More <i class="fa fa-long-arrow-right" aria-hidden="true"></i></a>
                </div>
              </div>
            </div>

          <div class="col-md-12">
            <div class="see-all-post text-center">
              <p style="font-weight: bold;">Fim da página <i class="fa fa-long-arrow-right" aria-hidden="true"></i></p>
            </div>
          </div>
        </div>
        <div class="col-md-3">
          <div class="blog-sidbar">
            <div class="search widgets">
              <form class="form-inline">
                <div class="form-group search-input">
                  <input type="text" class="form-control" placeholder="Search ...">
                </div>
                <button type="submit" class="btn btn-default tf-search-btn"><i class="tf-search"></i></button>
              </form>
            </div>

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
                  </div>
                </a>
                <a href="#" class="list-group-item">
                  <div class="media">
                    <div class="media-left media-middle"><p class="post-count">2</p></div>
                      <div class="media-body">
                        <p>Typography is  important fact for liusto odio dolore.</p>
                      </div>
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
                  </div>
                </a>
                <a href="#" class="list-group-item">
                  <div class="media">
                    <div class="media-left media-middle"><p class="post-count">4</p></div>
                      <div class="media-body">
                        <p>Typography is  important fact for liusto odio dolore.</p>
                      </div>
                    </div>
                  </div>
                </a>
              </div>
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
    <script src="plugins/slick/slick.min.js"></script>
    <script src="plugins/filterizr/jquery.filterizr.min.js"></script>
    <script src="plugins/magnific-popup/jquery.magnific-popup.min.js"></script>
    <script src="plugins/parallax.min.js"></script>
    <script src="plugins/jquery.vide.js"></script>
    <script src="plugins/google-map/gmap.js"></script>
    <script src="js/script.js"></script>
    </body>

    </html>