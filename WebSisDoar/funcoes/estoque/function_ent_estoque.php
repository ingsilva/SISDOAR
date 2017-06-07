<?php

include("../../config/conexao.php");
$id = $_POST["id"];
$quantidade = $_POST['quantidade'];
$tipo_sangue = $_POST['tipo_sangue'];
$fator_rh = $_POST['fator_rh'];
$triagem_idTriagem = $_POST['idtriagem'];
$categoria = $_POST['categoria'];
/*date_default_timezone_set('Bogota/colombia');*/
$data_hora = date('Y-m-d H:i');

if ($id == 0) {
    //salvar
    $sql = $con->prepare("INSERT INTO estoque_sangue (quantidade, tipo, fator_rh, triagem_idTriagem, data_hora, categoria) VALUES (?, ?, ?, ?, ?, ?)");
    $sql->bindValue(1, $quantidade);
    $sql->bindValue(2, $tipo_sangue);
    $sql->bindValue(3, $fator_rh);
    $sql->bindValue(4, $triagem_idTriagem);
    $sql->bindValue(5, $data_hora);
    $sql->bindValue(6, $categoria);


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
