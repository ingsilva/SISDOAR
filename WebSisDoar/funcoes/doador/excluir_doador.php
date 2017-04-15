<?php

include("./../../config/conexao.php");
$iddoador = $_POST["iddoador"];
$sql = $con->prepare("DELETE FROM doador WHERE iddoador = ?");
$sql->bindValue(1, $iddoador);
if ($sql->execute())
    echo true;
else
    echo false;
