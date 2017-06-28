<?php

include("../../config/conexao.php");
$id = $_POST["id"];
$nome = $_POST["nome"];
$ddd = $_POST["ddd"];
$telefone = $_POST["telefone"];
$dpto_iddpto= $_POST["dpto"];


//alterar
$sql = $con->prepare("UPDATE agenda SET nome = ?, ddd = ?, telefone = ?, dpto_iddpto = ? WHERE idagenda = ?");


$sql->bindValue(1, $nome);
$sql->bindValue(2, $ddd);
$sql->bindValue(3, $telefone);
$sql->bindValue(5, $dpto_iddpto);
$sql->bindValue(6, $id);

if ($sql->execute())
    echo true;
else
    echo false;
