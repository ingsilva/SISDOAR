<?php

include("../../config/conexao.php");
$idq_triagem = $_POST["idq_triagem"];
$quantidade = $_POST["quantidade"];
$tipo = $_POST["tipo_sangue"];
$fator_rh = $_POST["fator_rh"];
$categoria = "Entrada";

date_default_timezone_set('America/Resolute');
$data_hora = date('Y-m-d H:i');

$status_coleta = $_POST["status_coleta"];
$iddoencas = $_POST["iddoencas"];
$obs_coleta = $_POST["obs_coleta"];

$total = $_POST["quantidade"];
$tipo_sangue = $_POST["tipo_sangue"];

/* $triagem_idtriagem = $_POST["idtriagem"];


  // , categoria, data_hora,
  //salvar */
$sql = $con->prepare("INSERT INTO estoque_sangue(questionario_triagem_idq_triagem, quantidade, tipo, fator_rh, categoria, data_hora, 
                            status_coleta, doencas_iddoencas, obs_coleta) 
                                 VALUES (:questionario_triagem_idq_triagem, :quantidade, :tipo, :fator_rh, :categoria, 
                                 :data_hora, :status_coleta, :doencas_iddoencas, :obs_coleta)");


$sql->bindValue(':questionario_triagem_idq_triagem', $idq_triagem);
$sql->bindValue(':quantidade', $quantidade);
$sql->bindValue(':tipo', $tipo);
$sql->bindValue(':fator_rh', $fator_rh);
$sql->bindValue(':categoria', $categoria);
$sql->bindValue(':data_hora', $data_hora);
$sql->bindValue(':status_coleta', $status_coleta);
$sql->bindValue(':doencas_iddoencas', $iddoencas);
$sql->bindValue(':obs_coleta', $obs_coleta);

$sql->execute();



  $sql_estoque = $con->prepare("UPDATE estoque set total = total+'" . $total . "' where tipo ='" . $tipo_sangue . "' and fator_rh = '" . $fator_rh . "' ");
  $sql_estoque->bindValue(1, $total);
  $sql_estoque->bindValue(2, $tipo_sangue);
  $sql_estoque->bindValue(3, $fator_rh);







if ($sql_estoque->execute())
    echo true;
else
    echo false;

