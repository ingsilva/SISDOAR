<?php

include("../../config/conexao.php");
$id = $_POST["id"];
$nome = $_POST["nome"];
$ddd = $_POST["ddd"];
$telefone = $_POST["telefone"];

if ($id == 0) {
    //salvar
    $sql = $con->prepare("INSERT INTO agenda (nome, ddd, telefone VALUES (?, ?, ?)");
    $sql->bindValue(1, $nome);
    $sql->bindValue(2, $ddd);
    $sql->bindValue(3, $telefone);

    if ($sql->execute())
        echo true;
    else
        echo false;
}else {
    //alterar
    $sql = $con->prepare("UPDATE contato SET nome = ?, email = ? WHERE id = ?");
    $sql->bindValue(1, $nome);
    $sql->bindValue(2, $email);
    $sql->bindValue(3, $id);
    if ($sql->execute())
        echo true;
    else
        echo false;
}
