<?php

include("../../config/conexao.php");
$id = $_POST["id"];
$idade = $_POST['idade'];
$peso = $_POST['peso'];
$jejum = $_POST['jejum'];
$doador_iddoador = $_POST['iddoador'];
$status = $_POST['status'];
$doencas_iddoencas = $_POST['iddoencas'];

if ($id == 0) {
    //salvar
    $sql = $con->prepare("INSERT INTO triagem (idade, peso, jejum, doador_iddoador, status, doencas_iddoencas) "
            . "VALUES (:idade, :peso, :jejum, :doador_iddoador, :status, :doencas_iddoencas)");
    $sql->bindValue(':idade', $idade);
    $sql->bindValue(':peso', $peso);
    $sql->bindValue(':jejum', $jejum);
    $sql->bindValue(':doador_iddoador', $doador_iddoador);
    $sql->bindValue(':status', $status);
    $sql->bindValue(':doencas_iddoencas', $doencas_iddoencas);



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
