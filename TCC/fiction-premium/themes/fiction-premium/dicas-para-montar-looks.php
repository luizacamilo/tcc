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
    <title>Moda & Magia | Dicas para Looks</title>
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
              <img src="images/blog/tipos-de-corpo.jpg" alt="Blog Single Img">
            </div>
            <!-- Single Blog Page Main Content
            ================================== -->
            <div class="blog-single-content">
              <div class="blog-content-description">
                <h3 class="blog-content-title">Como montar um look que realce seu corpo e autoestima?</h3>
                <div class="meta">
                  <div class="date">
                    <p>25 Nov 2021</p>
                  </div>
                  <div class="author">
                    <p>Por Pietra Dini</p>
                  </div>
                </div>
                <p class="blog-description">
                  Não é nada fácil se sentir bem numa roupa, principalmente quando estamos com a autoestima baixa. São milhares de roupas e milhares de combinações
                  que podem ser usadas, e muitas vezes acabamos nem saindo de casa por estes mesmos motivos. Porém, não se preocupe, pois com este artigo você aprenderá duas maneiras
                  de realçar seu corpo e montar looks em que você se sinta confortável!
                </p>
              </div>
              <div class="blog-content-description">
                <h4 class="blog-inner-heading">Conheça seu Corpo</h4>
                <p class="blog-description">
                Antes de pensar nas peças de roupa é preciso entender seu formato de corpo. Cada mulher tem um biotipo diferente, ninguém é igual, por isso é preciso
                 entender seu corpo para escolher peças que o valorizem. As roupas não são para corrigir, mas sim para ressaltar o que você tem de melhor.  Entender o 
                 seu corpo faz com que você reconheça peças, acessórios e calçados que mais te valorizam. Dessa forma é mais fácil criar combinações que te agradem e 
                 fiquem mais proporcionais visualmente. Saiba se você tem mais ou menos busto, se o seu quadril é menor ou mais encorpado e se suas coxas são mais 
                 finas ou mais grossas. Dessa forma, é possível encontrar peças com modelagens confortáveis e que realçam cada parte. 
                </p>
              </div>
              <div class="blog-content-description">
                <h4 class="blog-inner-heading">Encontre seu Estilo e Transmita sua Personalidade</h4>
                <p class="blog-description">
                  Ao escolher as peças de rouaa, é necessário slecionar aqueles que combinam com o seu estilo e personalidade, além de ser peças de roupa que te façam sentir
                  confortável. Por isso, é importante entender quais roupastem a sua cara e você entende que vai gostar.
                  </br></br>
                  Entender seu estilo ajuda a escolher qual tendência usar e também como adaptar para o seu dia-a-dia.
                  </br></br>
                  Adeque as peças ao seu cotidiano e estilo para ter combinações que conversem com você. Além disso, não tenha medo de experimentar novas coisas,
                  tente novas peça, modelagens e cores para entender como pode funcionar para você. Use sua criatividade!
                </p>
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
