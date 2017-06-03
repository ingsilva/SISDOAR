<?php

include("../../config/conexao.php");
$id = $_POST["id"];
$data_registro = $_POST["data_registro"];
$numero_sus = $_POST["numero_sus"];
$nome = $_POST["nome"];
$nome_pai = $_POST["nome_pai"];
$nome_mae = $_POST["nome_mae"];
$data_nascimento = $_POST["data_nascimento"];
$idade = $_POST["idade"];
$sexo = $_POST["sexo"];
$etnia = $_POST["etnia"];
$nacionalidade = $_POST["nacionalidade"];
$naturalidade = $_POST["naturalidade"];
$rg = $_POST["rg"];
$expeditor = $_POST["expeditor"];
$estado_civil = $_POST["estado_civil"];
$escolaridade = $_POST["escolaridade"];
$endereco = $_POST["endereco"];
$numero = $_POST["numero"];
$bairro = $_POST["bairro"];
$complemento = $_POST["complemento"];
$cidade_idcidade = $_POST["cidade"];
$tipo_sangue = $_POST["tipo_sangue"];
$fator_rh = $_POST["fator_rh"];



if ($id == 0) {
    //salvar
    $sql = $con->prepare("INSERT INTO "
            . "doador (data_registro, numero_sus, nome, nome_pai, nome_mae, idade, sexo, etnia, nacionalidade,"
            . "naturalidade, rg, expeditor, estado_civil, escolaridade, endereco, numero, "
            . "bairro, complemento, cidade_idcidade, tipo_sangue, fator_rh)"
            . " VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");
    $sql->bindValue(1, $data_registro);
    $sql->bindValue(2, $numero_sus);
    $sql->bindValue(3, $nome);
    $sql->bindValue(4, $nome_pai);
    $sql->bindValue(5, $nome_mae);
    $sql->bindValue(6, $data_nascimento);
    $sql->bindValue(7, $idade);
    $sql->bindValue(8, $sexo);
    $sql->bindValue(9, $etnia);
    $sql->bindValue(10, $nacionalidade);
    $sql->bindValue(11, $naturalidade);
    $sql->bindValue(12, $rg);
    $sql->bindValue(13, $expeditor);
    $sql->bindValue(14, $estado_civil);
    $sql->bindValue(15, $escolaridade);
    $sql->bindValue(16, $endereco);
    $sql->bindValue(17, $numero);
    $sql->bindValue(18, $bairro);
    $sql->bindValue(19, $complemento);
    $sql->bindValue(20, $cidade_idcidade);
    $sql->bindValue(21, $tipo_sangue);
    $sql->bindValue(22, $fator_rh);    



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
