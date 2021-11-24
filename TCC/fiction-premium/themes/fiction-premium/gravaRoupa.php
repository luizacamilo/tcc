<?php 
session_start();

require_once "conexaobd.php";

$op = $_GET["opcao"];
//opcao = 1 -> Adiciona a roupa
//opcao = 2 -> salva alterações na roupa

$nome = $_POST["nome_roupa"];
$cor = $_POST["cor_roupa"];
$tamanho = $_POST["tamanho_roupa"];
$desc = $_POST["descricao_roupa"];
$categ = $_POST["categ_roupa"];
$id = $_SESSION["id"];
$tag = $_POST["tag"];

switch ($op){
  case "1":
    $img = addslashes(file_get_contents($_FILES['img_roupa']['tmp_name']));;
    $bazar = "N";
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
  break;

  case "2":
    $idRoupa = $_GET["idroupa"];
    $sqlUpdRoupa = mysqli_query($conn, "UPDATE tbroupa SET nome_roupa='".$nome."', cor_roupa='".$cor."', tamanho_roupa='".$tamanho."', 
                              descricao_roupa='".$desc."', id_categ='".$categ."' WHERE id_roupa='".$idRoupa."'");
    $rsUpdRoupa = mysqli_affected_rows($conn);
    foreach ($tag as $idTag){
      $sqlTagExists = mysqli_query($conn, "SELECT * from roupa_tag WHERE id_tag='".$idTag."' and id_roupa='".$idRoupa."'");
      $rsTagExists = mysqli_fetch_array($sqlTagExists);
      if (is_null($rsTagExists)){
        $sqlTagRoupa = mysqli_query($conn, "INSERT INTO roupa_tag(id_tag, id_roupa) VALUES ('".$idTag."', '".$idRoupa."')");
        $rsTagRoupa = mysqli_affected_rows($conn);
      }
    }
    if ($rsUpdRoupa = 1){
      header("location: roupa.php?idroupa=".$idRoupa);
    }
  break;

}




?>