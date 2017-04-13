<?php

include("./../../config/conexao.php");
$idcidade = $_POST["id"];
$sql = $con->prepare("DELETE FROM cidade WHERE idcidade = ?");
$sql->bindValue(1, $idcidade);
if ($sql->execute())
    echo true;
else
    echo false;
