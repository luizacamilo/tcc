<?php
session_start();

require_once "conexaobd.php";

$op = $_GET["opcao"];
//opcao = 1 -> Adiciona o usuário
//opcao = 2 -> salva alterações no usuário

$nomeUser = $_POST["nome_user"];
$emailUser = $_POST["email_user"];
$datanasciUser = $_POST["datanasci_user"];
$genUser = $_POST["genero_user"];

switch ($op){
  case "1":
    $senhaUser = $_POST["senha_user"];
		$fotoUser = addslashes(file_get_contents($_FILES['img_user']['tmp_name']));
    if($nomeUser && $emailUser && $datanasci_user && $genUser && $senhaUser && $fotoUser){
      $sqlCadastro = mysqli_query($conn,"INSERT INTO tbusuario (nome_user, email_user, senha_user, genero_user, datanasci_user, img_user) 
      VALUES ('".$nomeUser."','".$emailUser."','".$senhaUser."','".$genUser."','".$datanasciUser."','".$fotoUser."')");

      $rsCadastro = mysqli_affected_rows($conn);

      if($rsCadastro==1){
        header("location: login.php");
        $_SESSION["erro"]=0;
      }
      else{
        header("location: cadastro.php");
        //Erro = 3 -> Erro na inserção
        $_SESSION["erro"]=3;
      }
    }
    else{
      header("location: cadastro.php");
      $_SESSION["erro"]=2;
    }
    
  break;

	case "2":
		$id = $_GET["id"];

    if($nomeUser && $emailUser && $datanasciUser && $genUser){
      $sqlUpdPerfil = mysqli_query($conn, "UPDATE tbusuario SET nome_user='".$nomeUser."', email_user='".$emailUser."', 
																					genero_user='".$genUser."', datanasci_user='".$datanasciUser."' WHERE id_user='".$id."'");
      $rsUpdPerfil = mysqli_affected_rows($conn);
      
      header("location: perfil.php");
      $_SESSION["erro"]=0;
    }
    else{
      header("location: alteracaoPerfil.php");
      $_SESSION["erro"]=2;
    }
		
	break;
}


?>