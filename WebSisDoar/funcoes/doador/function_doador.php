<?php

include("../../config/conexao.php");
$id = $_POST["id"];
$nome = $_POST["nome"];
$data_nascimento = $_POST["data_nascimento"];
$cpf = $_POST["cpf"];
$rg = $_POST["rg"];
$endereco = $_POST["endereco"];
$numero = $_POST["numero"];
$bairro = $_POST["bairro"];
$complemento = $_POST["complemento"];
$cidade_idcidade = $_POST["cidade"];
$tipo_sangue = $_POST["tipo_sangue"];
$fator_rh = $_POST["fator_rh"];
$idade = $_POST["idade"];
if ($id == 0) {
    //salvar
    $sql = $con->prepare("INSERT INTO "
            . "paciente (nome, data_nascimento, cpf, rg, endereco, numero, "
            . "bairro, complemento, cidade_idcidade, tipo_sangue, fator_rh, idade)"
            . " VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");
    $sql->bindValue(1, $nome);
    $sql->bindValue(2, $data_nascimento);
    $sql->bindValue(3, $cpf);
    $sql->bindValue(4, $rg);
    $sql->bindValue(5, $endereco);
    $sql->bindValue(6, $numero);
    $sql->bindValue(7, $bairro);
    $sql->bindValue(8, $complemento);
    $sql->bindValue(9, $cidade_idcidade);
    $sql->bindValue(10, $tipo_sangue);
    $sql->bindValue(11, $fator_rh);
    $sql->bindValue(12, $idade);




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
