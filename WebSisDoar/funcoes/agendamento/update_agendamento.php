<?php

include("../../config/conexao.php");

$iddoador = $_POST["id"];
//$data_nasc = $_POST["data_nascimento"];
$numero_sus = $_POST["numero_sus"];


/* $cpf = $_POST["cpf"];
  $rg = $_POST["rg"];
  $idade = $_POST["idade"];
  $dd = $_POST["dd"];
  $contato = $_POST["contato"];
  $nome = $_POST["nome"];
  $agend_hora = $_POST["agend_hora"];
  $agend_data = $_POST["agend_data"]; */


//alterar
$sql = $con->prepare("UPDATE doador SET  numero_sus = :numero_sus WHERE iddoador = :iddoador");

$sql->bindValue(':numero_sus', $numero_sus);
$sql->bindValue(':iddoador', $iddoador);


if ($sql->execute())
    echo true;
else
    echo false;





