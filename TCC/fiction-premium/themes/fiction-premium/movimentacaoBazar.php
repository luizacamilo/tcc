<?php 
session_start();
require_once "conexaobd.php";

$idroupa = $_GET["idroupa"];
$op = $_GET["bazar"];

switch($op){
  case "colocar":
    $sqlAddBazar = mysqli_query($conn, "UPDATE tbroupa SET bazar='S' WHERE id_roupa='".$idroupa."'");
    $rsAddBazar = mysqli_affected_rows($conn);

    if ($rsAddBazar=1){
      header("location:closet.php");
    }
    else{
      echo "<script>alert('Algo deu errado, tente novamente!');</script>";
      header("location:roupa.php?idroupa=$idroupa");
    }
  break;

  case "retirar":
    $sqlAddBazar = mysqli_query($conn, "UPDATE tbroupa SET bazar='N' WHERE id_roupa='".$idroupa."'");
    $rsAddBazar = mysqli_affected_rows($conn);

    if ($rsAddBazar=1){
      header("location:closet.php");
    }
    else{
      header("location:roupa.php?idroupa=$idroupa");
    }
  break;
}