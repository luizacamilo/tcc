<?php
session_start();

require_once "conexaobd.php";

$op = $_GET["opcao"];

$nomeUser = $_POST["nome_user"];
$emailUser = $_POST["email_user"];
$datanasciUser = $_POST["datanasci_user"];
$genUser = $_POST["genero_user"];

switch ($op){
  case "1":
    $senhaUser = $_POST["senha_user"];
		$fotoUser = addslashes(file_get_contents($_FILES['img_user']['tmp_name']));

    $sqlCadastro = mysqli_query($conn,"INSERT INTO tbusuario (nome_user, email_user, senha_user, genero_user, datanasci_user, img_user) 
    VALUES ('".$nomeUser."','".$emailUser."','".$senhaUser."','".$genUser."','".$datanasciUser."','".$fotoUser."')");

    $rsCadastro = mysqli_affected_rows($conn);

    if($rsCadastro==1){
      header("location: login.php");
    }
    else{
      header("location: cadastro.php");
    }
  break;

	case "2":
		$id = $_GET["id"];
		
		$sqlUpdPerfil = mysqli_query($conn, "UPDATE tbusuario SET nome_user='".$nomeUser."', email_user='".$emailUser."', 
																					genero_user='".$genUser."', datanasci_user='".$datanasciUser."' WHERE id_user='".$id."'");
		$rsUpdPerfil = mysqli_affected_rows($conn);
		
		header("location: perfil.php");
	break;
}


?>