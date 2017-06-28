<?php

$id = $_POST['id'];
//$login = $_POST['usuario'];
$email = $_POST['email'];
$senha = MD5($_POST['senha']);
$connect = mysql_connect('localhost', 'root', 'root');
$db = mysql_select_db('db_sangue');


/* $query_select = "SELECT login FROM usuarios WHERE usuario = '$usuario'";
  $select = mysql_query($query_select, $connect);

  if ($login == "" || $login == null) {
  echo"<script language='javascript' type='text/javascript'>alert('O campo login deve ser preenchido');window.location.href='../../pages/usuario/lista_usuario.php';</script>";
  } else {
  if (empty($query_select) == $login) {

  echo"<script language='javascript' type='text/javascript'>alert('Esse login já existe');window.location.href='../../pages/usuario/lista_usuario.php';</script>";
  die();
  } else {

  }
  } */


$query = "update usuarios set email = '" . $email . "', senha = '" . $senha . "' where id = '" . $id . "' ";
// $query = "INSERT INTO usuarios (usuario,email,senha) VALUES ('$login','$email','$senha')";
$update = mysql_query($query, $connect);

if ($update) {
    echo"<script language='javascript' type='text/javascript'>alert('Usuário atualizado com sucesso!');window.location.href='../../pages/usuario/lista_usuario.php' </script>";
} else {
    echo $id;

    echo"<script language='javascript' type='text/javascript'>alert('Não foi possível atualizar esse usuário');window.location.href='../../pages/usuario/lista_usuario.php'</script>";
}
