<?php

include("../../config/conexao.php");
$iddoador = $_POST["iddoador"];
$nome = $_POST["nome"];
$data_nascimento = $_POST["data_nascimento"];
$cpf = $_POST["cpf"];

if ($iddoador == 0) {
    //salvar
    $sql = $con->prepare("INSERT INTO doador (nome, data_nascimento, cpf) VALUES (?, ?, ?)");
    $sql->bindValue(1, $nome);
    $sql->bindValue(2, $data_nascimento);
    $sql->bindValue(3, $cpf);
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
