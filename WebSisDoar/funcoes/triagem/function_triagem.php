<?php

include("../../config/conexao.php");
$id = $_POST["id"];
$nome = $_POST["nome"];
$idade = $_POST["idade"];
$peso = $_POST["peso"];
$status = $_POST["status"];

if ($id == 0) {
    //salvar
    $sql = $con->prepare("INSERT INTO triagem (doador_iddoador, idade, peso, status) "
            . "VALUES (?, ?, ?, ?)");
    $sql->bindValue(1, $nome);
    $sql->bindValue(2, $idade);
    $sql->bindValue(3, $peso);
    $sql->bindValue(4, $status);
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
