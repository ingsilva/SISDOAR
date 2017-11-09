<?php

include("../../config/conexao.php");
$id = $_POST["id"];
$total = $_POST["quantidade"];
$quantidade = $_POST["quantidade"];
$tipo_sangue = $_POST["tipo_sangue"];
$tipo = $_POST["tipo_sangue"];
$fator_rh = $_POST["fator_rh"];
$questionario_triagem_idq_triagem = $_POST["idq_triagem"];
$doencas_iddoencas = $_POST["iddoencas"];

date_default_timezone_set('America/Resolute');
$data_hora = date('Y-m-d H:i');

$categoria = "Entrada";
// , categoria, data_hora,
//salvar
$sql = $con->prepare("INSERT INTO estoque_sangue(questinario_triagem_idq_triagem, quantidade, tipo, fator_rh, doencas_iddoencas, categoria, data_hora) 
                                 VALUES (:questionario_triagem_idq_triagem, :quantidade, :tipo, :fator_rh, :doencas_iddoencas, :categoria, :data_hora)");


$sql->bindValue(':questinario_triagem_idq_triagem', $questionario_triagem_idq_triagem);
$sql->bindValue(':quantidade', $quantidade);
$sql->bindValue(':tipo', $tipo);
$sql->bindValue(':fator_rh', $fator_rh);
$sql->bindValue(':doencas_iddoencas', $doencas_iddoencas);
$sql->bindValue(':categoria', $categoria);
$sql->bindValue(':data_hora', $data_hora);

$sql->execute();



  $sql_estoque = $con->prepare("UPDATE estoque set total = total+'" . $total . "' where tipo ='" . $tipo_sangue . "' and fator_rh = '" . $fator_rh . "' ");
  $sql_estoque->bindValue(1, $total);
  $sql_estoque->bindValue(2, $tipo_sangue);
  $sql_estoque->bindValue(3, $fator_rh);







if ($sql_estoque->execute())
    echo true;
else
    echo false;

