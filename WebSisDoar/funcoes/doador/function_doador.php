<?php

include("../../config/conexao.php");
$id = $_POST["id"];
$data_registro = $_POST["data_registro"];
$id_doador = $_POST["id_doador"];
$numero_sus = $_POST["numero_sus"];
$nome = $_POST["nome"];
$nome_pai = $_POST["nome_pai"];
$nome_mae = $_POST["nome_mae"];
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
$nacionalidade = $_POST["nacionalidade"];
$naturalidade = $_POST["naturalidade"];
$uf = $_POST["uf"];
$sexo = $_POST["sexo"];

if ($id == 0) {
    //salvar
    $sql = $con->prepare("INSERT INTO "
            . "doador (nome, data_nascimento, cpf, rg, endereco, numero, "
            . "bairro, complemento, cidade_idcidade, tipo_sangue, fator_rh, idade, sexo)"
            . " VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");
    $sql->bindValue(1, $data_registro);
    $sql->bindValue(1, $id_doador);
    $sql->bindValue(1, $numero_sus);
    $sql->bindValue(1, $nome);
    $sql->bindValue(1, $nome_pai);
    $sql->bindValue(1, $nome_mae);
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
    $sql->bindValue(1, $nacionalidade);
    $sql->bindValue(1, $naturalidade);
    $sql->bindValue(1, $uf);
    $sql->bindValue(13, $sexo);



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
