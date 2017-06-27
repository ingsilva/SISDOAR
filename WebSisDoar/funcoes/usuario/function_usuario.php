<?php

$login = $_POST['usuario'];
$email = $_POST['email'];
$senha = MD5($_POST['senha']);
$connect = mysql_connect('localhost', 'root', 'root');
$db = mysql_select_db('db_sangue');
$query_select = "SELECT login FROM usuarios WHERE usuario = '$usuario'";
$select = mysql_query($query_select, $connect);

if ($login == "" || $login == null) {
    echo"<script language='javascript' type='text/javascript'>alert('O campo login deve ser preenchido');window.location.href='../../pages/usuario/cadastrar_usuario.php';</script>";
} else {
    if (empty($query_select) == $login) {

        echo"<script language='javascript' type='text/javascript'>alert('Esse login já existe');window.location.href='../../pages/usuario/cadastrar_usuario.php';</script>";
        die();
    } else {
        $query = "INSERT INTO usuarios (usuario,email,senha) VALUES ('$login','$email','$senha')";
        $insert = mysql_query($query, $connect);

        if ($insert) {
            echo"<script language='javascript' type='text/javascript'>alert('Usuário cadastrado com sucesso!');window.location.href='../../pages/usuario/lista_usuario.php' </script>";
        } else {
            echo"<script language='javascript' type='text/javascript'>alert('Não foi possível cadastrar esse usuário');window.location.href='../../pages/usuario/cadastrar_usuario.php'</script>";
        }
    }
}
