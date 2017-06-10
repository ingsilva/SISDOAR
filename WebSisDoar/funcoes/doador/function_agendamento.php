<?php

include("../../config/conexao.php");
$id = $_POST["id"];
$nome = $_POST["nome"];
$data_nascimento = $_POST["data_nascimento"];
$idade = $_POST["idade"];
$cpf = $_POST["cpf"];
$rg = $_POST["rg"];
$numero = $_POST["numero"];
$data_agend = $_POST["data_agend"];
$hora_agend = $_POST["hora_agend"];


//var estado_civil = $("#estado_civil").val();
//var escolaridade = $("#escolaridade").val();


if ($id == 0) {
    //salvar
    $sql = $con->prepare("INSERT INTO doador(nome, data_nascimento, idade, cpf, rg, numero, data_agend, hora_agend) 
    VALUES (?, ?, ?, ?, ?, ?, ?)");

    $sql->bindValue(1, $nome);
    $sql->bindValue(2, $data_nascimento);
    $sql->bindValue(3, $idade);
    $sql->bindValue(4, $cpf);
    $sql->bindValue(5, $rg);
    $sql->bindValue(6, $numero);
    $sql->bindValue(7, $data_agend);
    $sql->bindValue(8, $hora_agend);
    
    

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
