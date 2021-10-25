<?php
session_start();

$_SESSION["logado"]=false;
$_SESSION["error"]=0;
$_SESSION["id"]= 0;
header("location: index.php");

?>