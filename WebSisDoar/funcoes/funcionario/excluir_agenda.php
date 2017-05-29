<?php

include("./../../config/conexao.php");
$idagenda = $_POST["id"];
$sql = $con->prepare("DELETE FROM agenda WHERE idagenda = ?");
$sql->bindValue(1, $idagenda);
if ($sql->execute())
    echo true;
else
    echo false;
