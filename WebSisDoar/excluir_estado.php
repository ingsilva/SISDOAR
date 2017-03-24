<?php

include("./config/conexao.php");
$idestado = $_POST["id"];
$sql = $con->prepare("DELETE FROM estado WHERE idestado = ?");
$sql->bindValue(1, $idestado);
if ($sql->execute())
    echo true;
else
    echo false;
