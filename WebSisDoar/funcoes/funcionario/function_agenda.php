<?php

include("../../config/conexao.php");
$id = $_POST["id"];
$nome = $_POST["nome"];
$ddd = $_POST["ddd"];
$telefone = $_POST["telefone"];
$iddpto = $_POST["dpto"];

if ($id == 0) {
    //salvar
    $sql = $con->prepare("INSERT INTO agenda (nome, ddd, telefone, dpto_iddpto) VALUES (?, ?, ?, ?)");
    $sql->bindValue(1, $nome);
    $sql->bindValue(2, $ddd);
    $sql->bindValue(3, $telefone);
    $sql->bindValue(4, $iddpto);
    
    if ($sql->execute())
        echo true;
    else
        echo false;
}
