<?php
session_start();
require_once "conexaobd.php";

$id = $_SESSION["id"];
$nomeTag = $_POST["nome_tag"];

if($nomeTag){
  $sqlAddTag = mysqli_query($conn, "INSERT INTO tbtag(nome_tag, id_user) VALUES ('".$nomeTag."','".$id."')");
}

header("location:closet.php");
?>