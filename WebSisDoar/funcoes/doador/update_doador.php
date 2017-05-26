<?php

include ("../../config/conexao.php");

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
$sexo = $_POST["sexo"];


$sql = "update doador set 
            nome = '" . $nome . "', data_nascimento = '" . $data_nascimento . "',cpf = '" . $cpf . "',rg = '" . $rg .
        "',endereco = '" . $endereco . "',numero = '" . $numero . "',bairro = '" . $bairro ."',complemento = '" . $complemento .
        "',cidade = '" . $cidade_idcidade . "',tipo_sangue = '" . $tipo_sangue . "',fator_rh = '" . $fator_rh . "',idade = '" . $idade .
        "',sexo = '" . $sexo ."' 
            where iddoador = " . $id;

if (mysql_query($sql, $con)) {
    $msg = "Atualizado com sucesso!";
} else {
    $msg = "Erro ao atualizar!";
}
mysql_close($con);
?>