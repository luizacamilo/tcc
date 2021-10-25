<?php
session_start();

require_once "conexaobd.php";

$nomeUser = $_POST["nome_user"];
$emailUser = $_POST["email_user"];
$datanasciUser = $_POST["datanasci_user"];
$senhaUser = $_POST["senha_user"];
$genUser = $_POST["genero_user"];
$fotoUser = addslashes(file_get_contents($_FILES['img_user']['tmp_name']));

$sqlCadastro = mysqli_query($conn,"INSERT INTO tbusuario (nome_user, email_user, senha_user, genero_user, datanasci_user, img_user) 
VALUES ('".$nomeUser."','".$emailUser."','".$senhaUser."','".$genUser."','".$datanasciUser."','".$fotoUser."')");

$rsCadastro = mysqli_affected_rows($conn);

if($rsCadastro==1){
    echo "<script>alert('Cadastro efetuado com sucesso!');</script>";
    header("location: login.php");
}
else{
    echo "<script>alert('Algo deu errado, tente novamente!');</script>";
    header("location: cadastro.php");
}

?>