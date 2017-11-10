<?php

include("../../config/conexao.php");
$triagem_idtriagem= $_POST["id"];
$saude_hoje = $_POST['saude_hoje'];
$alcool_hoje = $_POST['alcool_hoje'];
$fumou_horas = $_POST['fumou_horas'];
$alimentou = $_POST['alimentou'];
$dormiu = $_POST['dormiu'];
$drogas_rel_sexual = $_POST['drogas_rel_sexual'];
$contato_sexual_transfusao = $_POST['contato_sexual_transfusao'];
$contato_sexual_hemod = $_POST['contato_sexual_hemod'];
$teste_aids = $_POST['teste_aids'];
$quando_doou = $_POST['quando_doou'];
$quantas_vzs_doou = $_POST['quantas_vzs_doou'];
$onde_doou = $_POST['onde_doou'];
$recusado_motivo = $_POST['recusado_motivo'];
$recusado_data = $_POST['recusado_data'];
$situacao_doador = $_POST['situacao_doador'];
$obs_doador = $_POST['obs_doador'];



    //salvar
    $sql = $con->prepare("INSERT INTO questionario_triagem (triagem_idtriagem, saude_hoje, alcool_hoje, fumou_horas, alimentou, dormiu,"
            . "drogas_rel_sexual, contato_sexual_transfusao, contato_sexual_hemod, teste_aids,quando_doou,quantas_vzs_doou, onde_doou, "
            . "recusado_motivo, recusado_data, situacao_doador, obs_doador) "
            . "VALUES (:triagem_idtriagem, :saude_hoje, :alcool_hoje, :fumou_horas, :alimentou, :dormiu, :drogas_rel_sexual, "
            . ":contato_sexual_transfusao, :contato_sexual_hemod, :teste_aids, :quando_doou,:quantas_vzs_doou, :onde_doou, "
            . ":recusado_motivo, :recusado_data, :situacao_doador, :obs_doador)");
    //$sql->bindValue(':saude_hoje', $saude_hoje);
    $sql->bindValue(':triagem_idtriagem', $triagem_idtriagem);
    $sql->bindValue(':saude_hoje', $saude_hoje);
    $sql->bindValue(':alcool_hoje', $alcool_hoje);
    $sql->bindValue(':fumou_horas', $fumou_horas);
    $sql->bindValue(':alimentou', $alimentou);
    $sql->bindValue(':dormiu', $dormiu);
    $sql->bindValue(':drogas_rel_sexual', $drogas_rel_sexual);
    $sql->bindValue(':contato_sexual_transfusao', $contato_sexual_transfusao);
    $sql->bindValue(':contato_sexual_hemod', $contato_sexual_hemod);
    $sql->bindValue(':teste_aids', $teste_aids);
    $sql->bindValue(':quando_doou', $quando_doou);
    $sql->bindValue(':quantas_vzs_doou', $quantas_vzs_doou);
    $sql->bindValue(':onde_doou', $onde_doou);
    $sql->bindValue(':recusado_motivo', $recusado_motivo);
    $sql->bindValue(':recusado_data', $recusado_data);
    $sql->bindValue(':situacao_doador', $situacao_doador);
    $sql->bindValue(':obs_doador', $obs_doador);
    



    if ($sql->execute())
        echo true;
    else
        echo false;
