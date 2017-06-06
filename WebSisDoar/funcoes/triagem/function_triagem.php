<?php

include("../../config/conexao.php");
$id = $_POST["id"];
$idade = $_POST['idade'];
$peso = $_POST['peso'];
$jejum = $_POST['jejum'];
$doador_iddoador = $_POST['iddoador'];
$status = $_POST['status'];

if ($id == 0) {
    //salvar
    $sql = $con->prepare("INSERT INTO triagem (idade, peso, jejum, doador_iddoador, status) VALUES (?, ?, ?, ?, ?)");
    $sql->bindValue(1, $idade);
    $sql->bindValue(2, $peso);
    $sql->bindValue(3, $jejum);
    $sql->bindValue(4, $doador_iddoador);
    $sql->bindValue(5, $status);

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
