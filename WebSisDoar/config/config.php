<?php
 
define('BD_USER', 'usuário de banco de dados');
define('BD_PASS', 'senha  do banco de dados');
define('BD_NAME', 'nome do seu banco de dados');
 
mysql_connect('localhost', BD_USER, BD_PASS);
mysql_select_db(BD_NAME);
 
?>
