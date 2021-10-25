<?php
session_start();

$subject = $_POST["subject"];
$emailUser = $_POST["email"];
$nome = $_POST["nome"];
$msg = $_POST["msg"];
$emailContato = "biancarenesto@hotmail.com";
$headers = "From: " . $emailUser . '\r\n'; // remetente


mail($emailContato, $subject, $msg);


?>