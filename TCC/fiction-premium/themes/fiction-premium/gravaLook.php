<?php 
session_start();
require_once "conexaobd.php";

$op = $_GET["opcao"];
//opcao = 1 -> Adiciona o look
//opcao = 2 -> salva alterações no look

$data = $_POST["data_agenda"];
$evento = $_POST["evento_agenda"];
$idUser = $_SESSION["id"];
$roupa = $_POST["roupa"];

switch($op){
  case "1":
    //Verifica se todos os campos estão preenchidos
    if($data && $evento && $roupa){
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
        $_SESSION["erro"] = 0;
      }
      else {
        header("location: montagemLook.php");
        //Erro = 3 -> Erro na inserção
        $_SESSION["erro"]=3;
      }
    }
    else{
      header("location: montagemLook.php");
      //Erro = 2 -> campos vazios
      $_SESSION["erro"] = 2;
    }
    
  break;

  case "2":
    $agenda = $_GET["idagenda"];

    //Verifica se todos os campos estão preenchidos
    if($data && $evento && $roupa){
      $sqlUpdLook = mysqli_query($conn,"UPDATE tbagendamento SET data_agenda='".$data."', evento_agenda='".$evento."' WHERE id_agenda='".$agenda."'");
      foreach ($roupa as $idRoupa){
        
        $sqlLookExists = mysqli_query($conn, "SELECT * from roupa_agenda WHERE id_roupa='".$idRoupa."' and id_agenda='".$agenda."'");
        $rsLookExists = mysqli_fetch_array($sqlLookExists);
        if (is_null($rsLookExists)){
          $sqlAddRoupa = mysqli_query($conn, "INSERT INTO roupa_agenda(id_agenda, id_roupa) VALUES ('".$agenda."', '".$idRoupa."')");
          $rsAddRoupa = mysqli_affected_rows($conn);
        }
        
        header("location: agendaLooks.php");
        $_SESSION["erro"] = 0;
      }
    }
    else{
      header("location: alteracaoLook.php?idagenda=".$agenda);
      //Erro = 2 -> campos vazios
      $_SESSION["erro"] = 2;
    }
    
  break;
}





?>