<?php
session_start();

require_once "conexaobd.php";

$id= $_SESSION["id"];


//altura	largura_ombros	busto	cintura	quadril	pe	comprimento_bracos	altura_pernas

$altura= $_POST["altura"];
$larguraOmbro= $_POST["largura_ombros"];
$busto= $_POST["busto"];
$cintura= $_POST["cintura"];
$quadril= $_POST["quadril"];
$pe= $_POST["pe"];
$compriBracos= $_POST["comprimento_bracos"];
$alturaPerna= $_POST["altura_pernas"];

$sqlMedida= mysqli_query($conn,"INSERT INTO tbmedidas (altura, largura_ombros, busto, cintura, quadril, pe, comprimento_bracos, altura_pernas, id_user) 
VALUES ('".$altura."', '".$larguraOmbro."', '".$busto."', '".$cintura."', '".$quadril."', '".$pe."', '".$compriBracos."', '".$alturaPerna."', '".$id."')");

$rsMedida=mysqli_affected_rows($conn);

if($rsMedida==1){
    echo "<script>alert('Medidas adicionadas com sucesso!');</script>";
    header("location: perfil.php");
}
else{
    echo "<script>alert('Algo deu errado, tente novamente!');</script>";
    header("location: medidas.php");
}

?>