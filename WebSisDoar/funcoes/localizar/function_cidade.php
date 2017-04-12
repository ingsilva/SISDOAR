<?php

include("../../config/conexao.php");
$id = $_POST["id"];
$descricao = $_POST["nome"];
$idestado = $_POST["estado"];

if ($id == 0) {
    //salvar
    $sql = $con->prepare("INSERT INTO cidade (descricao, estado_idestado) VALUES (?, ?)");
    $sql->bindValue(1, $descricao);
    $sql->bindValue(2, $idestado);
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
