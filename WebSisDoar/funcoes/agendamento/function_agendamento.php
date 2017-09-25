<?php

include("../../config/conexao.php");
$id = $_POST["id"];
$data_nascimento = $_POST["data_nascimento"];
$cpf = $_POST["cpf"];
$rg = $_POST["rg"];
$idade = $_POST["idade"];
$dd = $_POST["dd"];
$contato = $_POST["contato"];
$nome = $_POST["nome"];
$agend_hora = $_POST["agend_hora"];
$agend_data = $_POST["agend_data"];


$con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

$sql = $con->prepare("INSERT INTO doador(nome, data_nascimento, cpf, rg, idade, dd, contato) 
                                 VALUES (:nome, :data_nascimento, :cpf, :rg, :idade, :dd, :contato)");



$sql->bindValue(':nome', $nome);
$sql->bindValue(':data_nascimento', $data_nascimento);
$sql->bindValue(':cpf', $cpf);
$sql->bindValue(':rg', $rg);
$sql->bindValue(':idade', $idade);
$sql->bindValue(':dd', $dd);
$sql->bindValue(':contato', $contato);


$sql->execute();
$ultimo = $con->lastInsertId();


//inserindo no agendamento

$doador_iddoador = $ultimo;

$sql_agend = $sql = $con->prepare("INSERT INTO agendamento( agend_hora, agend_data, doador_iddoador ) VALUES (:agend_hora, :agend_data, :doador_iddoador  )");

$sql->bindValue(':agend_hora', $agend_hora);
$sql->bindValue(':agend_data', $agend_data);
$sql->bindValue(':doador_iddoador', $doador_iddoador);

if ($sql_agend->execute())
    echo true;
else
    echo false;





