<?php
session_start();

require_once "conexaobd.php";

$id= $_SESSION["id"];
$op = $_GET["opcao"];

$altura= $_POST["altura"];
$larguraOmbro= $_POST["largura_ombros"];
$busto= $_POST["busto"];
$cintura= $_POST["cintura"];
$quadril= $_POST["quadril"];
$pe= $_POST["pe"];
$compriBracos= $_POST["comprimento_bracos"];
$alturaPerna= $_POST["altura_pernas"];

switch ($op){
  case "1":
		if($altura && $larguraOmbro && $busto && $cintura && $quadril && $pe && $compriBracos && $alturaPerna){
			$sqlMedida= mysqli_query($conn,"INSERT INTO tbmedidas (altura, largura_ombros, busto, cintura, quadril, pe, comprimento_bracos, altura_pernas, id_user) 
			VALUES ('".$altura."', '".$larguraOmbro."', '".$busto."', '".$cintura."', '".$quadril."', '".$pe."', '".$compriBracos."', '".$alturaPerna."', '".$id."')");

			$rsMedida=mysqli_affected_rows($conn);

			if($rsMedida==1){
				header("location: perfil.php");
				$_SESSION["erro"]=0;
			}
			else{
				header("location: medidas.php");
				//Erro = 3 -> Erro na inserção
				$_SESSION["erro"]=3;
			}
		}
		else{
			header("location: medidas.php");
			$_SESSION["erro"]=2;
		}
		
  break;

	case "2":
		if($altura && $larguraOmbro && $busto && $cintura && $quadril && $pe && $compriBracos && $alturaPerna){
			$sqlUpdMedida = mysqli_query($conn,"UPDATE tbmedidas SET altura='".$altura."',largura_ombros='".$larguraOmbro."',busto='".$busto."',cintura='".$cintura."',
			quadril='".$quadril."',pe='".$pe."',comprimento_bracos='".$compriBracos."',altura_pernas='".$alturaPerna."' WHERE id_user='".$id."'");
			$rsUpdMedida = mysqli_affected_rows($conn);

			header("location: perfil.php");
			$_SESSION["erro"]=0;
		}
		else{
			header("location: alteracaoMedidas.php");
			$_SESSION["erro"]=2;
		}
	break;
}



?>