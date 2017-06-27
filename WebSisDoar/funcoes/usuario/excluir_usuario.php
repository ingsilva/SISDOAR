<?php

include("./../../config/conexao.php");
$id = $_POST["id"];
$sql = $con->prepare("DELETE FROM usuarios WHERE id = ?");
$sql->bindValue(1, $id);
if ($sql->execute())
    echo true;
else
    echo false;
