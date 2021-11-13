<?php 
session_start();

require_once "conexaobd.php";



$nome = $_POST["nome_roupa"];
$img = addslashes(file_get_contents($_FILES['img_roupa']['tmp_name']));;
$cor = $_POST["cor_roupa"];
$tamanho = $_POST["tamanho_roupa"];
$desc = $_POST["descricao_roupa"];
$bazar = "N";
$categ = $_POST["categ_roupa"];
$id = $_SESSION["id"];
$tag = $_POST["tag"];

$sqlAddRoupa = mysqli_query($conn, "INSERT INTO tbroupa(img_roupa, nome_roupa, cor_roupa, tamanho_roupa, descricao_roupa, bazar, id_user, id_categ)
                            VALUES ('".$img."', '".$nome."', '".$cor."', '".$tamanho."', '".$desc."', '".$bazar."', '".$id."', '".$categ."')");

$rsAddRoupa = mysqli_affected_rows($conn);

$sqlIdRoupa = mysqli_query($conn, "SELECT id_roupa FROM tbroupa WHERE nome_roupa = '".$nome."' and id_user = '".$id."'");
$rsIdRoupa = mysqli_fetch_array($sqlIdRoupa);

foreach ($tag as $idTag){
  $sqlTagRoupa = mysqli_query($conn, "INSERT INTO roupa_tag(id_tag, id_roupa) VALUES ('".$idTag."', '".$rsIdRoupa["id_roupa"]."')");
  $rsTagRoupa = mysqli_affected_rows($conn);
  
}


if ($rsTagRoupa != 0){
  header("location: closet.php");
}
else {
  echo "<script>alert('Algo deu errado, tente novamente!');</script>";
  header("location: adicionaRoupa.php");

}


?>