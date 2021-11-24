<?php 
require_once "conexaobd.php";

$op = $_GET["op"];

switch ($op){
  case "roupa":
    $roupa = $_GET["idroupa"];
    $sqlDelTag = mysqli_query($conn, "DELETE FROM roupa_tag WHERE id_roupa = '".$roupa."'");
    $sqlDelAgenda = mysqli_query($conn, "DELETE FROM roupa_agenda WHERE id_roupa = '".$roupa."'");
    $sqlDelRoupa = mysqli_query($conn, "DELETE FROM tbroupa WHERE  id_roupa = '".$roupa."'");

    header("location: closet.php");
  break;

  case "look":
    $agenda = $_GET["idagenda"];
    $sqlDelLook = mysqli_query($conn,"DELETE FROM roupa_agenda WHERE id_agenda = '".$agenda."'");
    $sqlDelAgenda = mysqli_query($conn, "DELETE FROM tbagendamento WHERE id_agenda = '".$agenda."'");

    header("location: agendaLooks.php");
  break;

}



?>