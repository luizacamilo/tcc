<?php
  session_start();
        
  require_once "conexaobd.php";

  $email = $_POST["email_user"];
  $senha = $_POST["senha_user"];


  // consulta na tabela clientes
  $sqlLogin = mysqli_query($conn,"SELECT * FROM tbusuario WHERE email_user = '$email' AND senha_user = '$senha'");

  // executamos a consulta e armazenamos o(s) registro(s) selecionado(s) na variável $rsLogin
  if($rsLogin = mysqli_fetch_array($sqlLogin)){
        
  	$_SESSION["id"] = $rsLogin["id_user"];
    $_SESSION["erro"] = 0;
    $_SESSION["logado"] = true;
    header("location: perfil.php");
  }
  else{
    // Erro = 1 -> Login inválido
    $_SESSION["erro"] = 1;
    $_SESSION["logado"] = false;
    header("location: login.php");        
	}


?>