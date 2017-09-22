<?php

include("../../config/conexao.php");
$iddoador = $_POST["iddoador"];
$data_nascimento = $_POST["data_nascimento"];
/* $cpf = $_POST["cpf"];
  $rg = $_POST["rg"];
  $idade = $_POST["idade"];
  $dd = $_POST["dd"];
  $contato = $_POST["contato"];
  $nome = $_POST["nome"];
  $agend_hora = $_POST["agend_hora"];
  $agend_data = $_POST["agend_data"]; */

//alterar
$sql = $con->prepare("UPDATE doador SET  data_nascimento = :data_nascimento WHERE iddoador = :iddoador");

$sql->bindValue(':data_nascimento', $data_nascimento);
$sql->bindValue(':iddoador', $iddoador);


if ($sql->execute())
    echo true;
else
    echo false;





