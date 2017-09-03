<?php

include("../../config/conexao.php");
$id = $_POST["id"];
$total = $_POST["quantidade"];
$tipo_sangue = $_POST["tipo_sangue"];
$fator_rh = $_POST["fator_rh"];

//date_default_timezone_set('America/Resolute'); 
//$data_hora = date('Y-m-d H:i');

// , categoria, data_hora,

if ($id == 0) {
    //salvar
    $sql = $con->prepare("UPDATE estoque set total = total+'".$total."' where tipo ='".$tipo_sangue."' and fator_rh = '".$fator_rh."' ");
    $sql->bindValue(1, $total);
    $sql->bindValue(2, $tipo_sangue);
    $sql->bindValue(3, $fator_rh);
    

   
   



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
