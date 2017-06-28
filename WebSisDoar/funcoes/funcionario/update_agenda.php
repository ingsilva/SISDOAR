<?php

include("../../config/conexao.php");
$id = $_POST["id"];
$nome = $_POST["nome"];
$telefone = $_POST["telefone"];
$ddd = $_POST["ddd"];
$dpto_iddpto = $_POST["dpto"];


//alterar
$sql = $con->prepare("UPDATE agenda SET nome = ?, telefone = ?, ddd = ?, dpto_iddpto = ? WHERE idagenda = ?");


$sql->bindValue(1, $nome);
$sql->bindValue(2, $telefone);
$sql->bindValue(3, $ddd);
$sql->bindValue(4, $dpto_iddpto);
$sql->bindValue(5, $id);

if ($sql->execute())
    echo true;
else
    echo false;
