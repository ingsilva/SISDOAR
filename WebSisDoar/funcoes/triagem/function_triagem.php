<?php

include("../../config/conexao.php");
$id = $_POST["id"];
$peso = $_POST['peso'];
$doador_iddoador = $_POST['iddoador'];
$pulso = $_POST['pulso'];
$pressao = $_POST['pressao'];
$altura = $_POST['altura'];
$anemia = $_POST['anemia'];


if ($id == 0) {
    //salvar
    $sql = $con->prepare("INSERT INTO triagem (peso, doador_iddoador, pulso, pressao, altura, teste_anemia) "
            . "VALUES (:peso, :doador_iddoador, :pulso, :pressao, :altura, :teste_anemia)");
    $sql->bindValue(':peso', $peso);
    $sql->bindValue(':doador_iddoador', $doador_iddoador);
    $sql->bindValue(':pulso', $pulso);
    $sql->bindValue(':pressao', $pressao);
    $sql->bindValue(':altura', $altura);
    $sql->bindValue(':teste_anemia', $anemia);



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
