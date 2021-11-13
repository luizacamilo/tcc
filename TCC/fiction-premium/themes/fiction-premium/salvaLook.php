<?php 
session_start();
require_once "conexaobd.php";

$data = $_POST["data_agenda"];
$evento = $_POST["evento_agenda"];
$idUser = $_SESSION["id"];
$roupa = $_POST["roupa"];

$sqlLook = mysqli_query($conn, "INSERT INTO tbagendamento(data_agenda, evento_agenda, id_user)
                        VALUES('".$data."', '".$evento."', '".$idUser."')");
$rsLook = mysqli_affected_rows($conn);

$sqlAgenda = mysqli_query($conn, "SELECT * FROM tbagendamento WHERE id_user = '".$idUser."' and data_agenda = '".$data."' and evento_agenda = '".$evento."'");
$rsAgenda = mysqli_fetch_array($sqlAgenda);


foreach ($roupa as $idRoupa){
  $sqlRoupaAgenda = mysqli_query($conn, "INSERT INTO roupa_agenda(id_agenda, id_roupa) VALUES ('".$rsAgenda["id_agenda"]."', '".$idRoupa."')");
  $rsRoupaAgenda = mysqli_affected_rows($conn);
  
}

if ($rsRoupaAgenda != 0){
  header("location: agendaLooks.php");
}
else {
  echo "<script>alert('Algo deu errado, tente novamente!');</script>";
  header("location: montagemLooks.php");

}



?>