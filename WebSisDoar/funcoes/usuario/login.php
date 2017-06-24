<?php

require_once ("seguranca.php");

if ($_SERVER ['REQUEST_METHOD'] == 'POST') {
	
	$usuario = $_POST['usuario'];
	$senha = MD5($_POST['senha']);
	
	// Usuário não forneceu a senha ou o login
	if(!$usuario || !$senha){
		echo "Você deve digitar sua senha e login!";
		exit;
	}
	
	
	// usuario logado
	if (validaUsuario ( $usuario, $senha ) == true) {
		
		header ( "Location: ../../DashBoard.php" );
	} else {
		//usuario ou senha incorretos
		expulsaVisitante ();
	}
}