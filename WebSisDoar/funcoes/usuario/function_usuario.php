<?php

$login = $_POST['login'];
$nome = $_POST['nome'];
$senha = MD5($_POST['senha']);
$connect = mysql_connect('localhost', 'root', 'root');
$db = mysql_select_db('db_sangue');
$query_select = "SELECT login FROM usuarios WHERE login = '$login'";
$select = mysql_query($query_select, $connect);
$array = mysql_fetch_array($select);
$logarray = $array['login'];

if ($login == "" || $login == null) {
    echo"<script language='javascript' type='text/javascript'>alert('O campo login deve ser preenchido');window.location.href='cadastro.html';</script>";
} else {
    if ($logarray == $login) {

        echo"<script language='javascript' type='text/javascript'>alert('Esse login já existe');window.location.href='cadastro.html';</script>";
        die();
    } else {
        $query = "INSERT INTO usuarios (nome,login,senha) VALUES ('$nome','$login','$senha')";
        $insert = mysql_query($query, $connect);

        if ($insert) {
            echo"<script language='javascript' type='text/javascript'>alert('Usuário cadastrado com sucesso!')</script>";
        } else {
            echo"<script language='javascript' type='text/javascript'>alert('Não foi possível cadastrar esse usuário');window.location.href='../../pages/usuario/cadastrar_usuario.php'</script>";
        }
    }
}
