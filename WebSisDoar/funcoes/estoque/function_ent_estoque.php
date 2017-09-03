<?php

include("../../config/conexao.php");
$id = $_POST["id"];

$triagem_idtriagem = $_POST['idtriagem'];
$quantidade = $_POST['quantidade'];
$tipo_sangue = $_POST['tipo_sangue'];
$fator_rh = $_POST['fator_rh'];
$categoria = $_POST['categoria'];
date_default_timezone_set('America/Resolute'); 
$data_hora = date('Y-m-d H:i');

// , categoria, data_hora,

if ($id == 0) {
    //salvar
    $sql = $con->prepare("INSERT INTO estoque_sangue (triagem_idTriagem, quantidade, tipo, fator_rh, categoria, data_hora ) VALUES (?, ?, ?, ?, ?, ?)");
    $sql->bindValue(1, $triagem_idtriagem);
    $sql->bindValue(2, $quantidade);
    $sql->bindValue(3, $tipo_sangue);
    $sql->bindValue(4, $fator_rh);
    $sql->bindValue(5, $categoria);
    $sql->bindValue(6, $data_hora);

    
    $sql_update = $con->prepare("INSERT INTO estoque_sangue (triagem_idTriagem, quantidade, tipo, fator_rh, categoria, data_hora ) VALUES (?, ?, ?, ?, ?, ?)");




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
