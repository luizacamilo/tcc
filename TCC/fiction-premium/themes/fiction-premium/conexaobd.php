<?php
$servidor = "localhost";
$usuario = "root";
$senhabd = "root";
$banco = "bdmodamagia";

$conn = mysqli_connect($servidor, $usuario, $senhabd, $banco) or die("Erro ao conectar com o BD");

?>