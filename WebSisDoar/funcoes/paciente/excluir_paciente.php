<?php

include("./../../config/conexao.php");
$idpaciente = $_POST["id"];
$sql = $con->prepare("DELETE FROM paciente WHERE idpaciente = ?");
$sql->bindValue(1, $idpaciente);
if ($sql->execute())
    echo true;
else
    echo false;
