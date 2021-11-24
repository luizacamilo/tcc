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
    <title>Moda & Magia | Login</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="apple-touch-icon" href="apple-touch-icon.png">
    <!-- Place favicon.ico in the root directory -->

    <link rel="stylesheet" href="plugins/themefisher-fonts/themefisher-fonts.css">

    <link rel="stylesheet" href="css/css.css">

    <!-- Link do icone -->
    <link rel="icon" href="images/icones/icone_mm_black_recortado.png" />

    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

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
        <div class="containera">
            <div class="simple-login-container">
                <h2>Entre em sua Conta!</h2>
    						</br>
                <form method="post" action="validalogin.php">
                    <div class="row">
                        <div class="col-md-12 form-group">
                            <input type="email" name="email_user" class="form-control" placeholder="Email">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12 form-group">
                            <input type="password" name="senha_user" placeholder="Senha" class="form-control">
                        </div>
                    </div>
                    <br>
                    <div class="row">
                        <div class="col-md-12 form-group">
                            <span class="label">Ainda não tem uma conta? <a href="cadastro.php" style="color: #99FFDD;">Cadastre-se</a></span>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12 form-group">
                            <input type="submit" class="btn-main">
                        </div>
                    </div>
                    <?php
                    if($erro == 1){
                    ?>
                        <p class="error">Email e/ou senha incorretos!</p>
                    <?php	

                        }
                        
                    ?>
                </form>
                
            </div>
        </div>
    
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


        

    <script src="js/script.js"></script>
    </body>
</html>