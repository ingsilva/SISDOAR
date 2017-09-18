<?php

include("../../config/conexao.php");
$id = $_POST["id"];
$doador_iddoador = $_POST["iddoador"];
$data = $_POST["data"];
$hora = $_POST["hora"];


//var estado_civil = $("#estado_civil").val();
//var escolaridade = $("#escolaridade").val();


if ($id == 0) {
    //salvar
    $sql = $con->prepare("INSERT INTO agendamento (doador_iddoador, data, hora) 
    VALUES (?, ?, ?, ?, ?, ?, ?)");

    $sql->bindValue(1, $doador_iddoador);
    $sql->bindValue(7, $data);
    $sql->bindValue(8, $hora);
    
    

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
