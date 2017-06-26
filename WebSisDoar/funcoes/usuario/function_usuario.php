<?php

$usuario = $_POST['usuario'];
$email = $_POST['email'];
$senha = MD5($_POST['senha']);
$connect = mysql_connect('localhost', 'root', 'root');
$db = mysql_select_db('db_sangue');
$query_select = "SELECT login FROM usuarios WHERE usuario = '$usuario'";
$select = mysql_query($query_select, $connect);
$array = mysql_fetch_array($select);
$logarray = $array['usuario'];

if ($usuario == "" || $usuario == null) {
    echo"<script language='javascript' type='text/javascript'>alert('O campo *Nome de Usuario* deve ser preenchido');window.location.href='cadastrar_usuario.php';</script>";
} else {
    if ($logarray == $usuario) {

        echo"<script language='javascript' type='text/javascript'>alert('Esse Usuário já existe');window.location.href='cadastrar_usuario.php';</script>";
        die();
    } else {
        $query = "INSERT INTO usuarios (usuario,email,senha) VALUES ('$usuario','$email','$senha')";
        $insert = mysql_query($query, $connect);

        if ($insert) {
            echo"<script language='javascript' type='text/javascript'>alert('Usuário cadastrado com sucesso!')</script>";
        } else {
            echo"<script language='javascript' type='text/javascript'>alert('Não foi possível cadastrar esse usuário');window.location.href='../../pages/usuario/cadastrar_usuario.php'</script>";
        }
    }
}
