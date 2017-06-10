<?php

include("../../config/conexao.php");
$id = $_POST["id"];
$nome = $_POST["nome"];
$data_nascimento = $_POST["data_nascimento"];
$cpf = $_POST["cpf"];
$rg = $_POST["rg"];
$endereco = $_POST["endereco"];
$numero = $_POST["numero"];
$bairro = $_POST["bairro"];					
$complemento = $_POST["complemento"];
$cidade_idcidade = $_POST["cidade"];
$tipo_sangue = $_POST["tipo_sangue"];
$fator_rh = $_POST["fator_rh"];
$idade = $_POST["idade"];
$sexo = $_POST["sexo"];
$data_registro = $_POST["data_registro"];
$num_sus = $_POST["numero_sus"];
$expeditor = $_POST["expeditor"];
$etnia = $_POST["etnia"];
$nome_pai = $_POST["nome_pai"];
$nome_mae = $_POST["nome_mae"];
$estado_civil = $_POST["estado_civil"];
$escolaridade = $_POST["escolaridade"];
$naturalidade = $_POST["naturalidade"];
$data_agend = $_POST["data_agend"];
$hora_agend = $_POST["hora_agend"];

		//			var estado_civil = $("#estado_civil").val();
			//		var escolaridade = $("#escolaridade").val();
		

if ($id == 0) {
    //salvar
    $sql = $con->prepare("INSERT INTO doador(nome, data_nascimento, cpf, rg, endereco, 
											numero, bairro, complemento, cidade_idcidade, tipo_sangue, 
											fator_rh, idade, sexo, data_registro, num_sus, expeditor, 
											etnia, nome_pai, nome_mae, estado_civil, escolaridade, naturalidade, data_agend, hora_agend) 
						VALUES (?, ?, ?, ?, ?, 
								?, ?, ?, ?,  ?, 
								?, ?, ?, ?, ?, 
								?, ?, ?, ?,
								?, ?, ?, ?, ?)");
	
    $sql->bindValue(1, $nome);
    $sql->bindValue(2, $data_nascimento);
    $sql->bindValue(3, $cpf);
    $sql->bindValue(4, $rg);
	$sql->bindValue(5, $endereco);
	$sql->bindValue(6, $numero);
	$sql->bindValue(7, $bairro);
	$sql->bindValue(8, $complemento);
	$sql->bindValue(9, $cidade_idcidade);
	$sql->bindValue(10, $tipo_sangue);
	$sql->bindValue(11, $fator_rh);
	$sql->bindValue(12, $idade);
	$sql->bindValue(13, $sexo);
	$sql->bindValue(14, $data_registro);
	$sql->bindValue(15, $num_sus);	
	$sql->bindValue(16, $expeditor);
	$sql->bindValue(17, $etnia);
	$sql->bindValue(18, $nome_pai);
	$sql->bindValue(19, $nome_mae);	
	$sql->bindValue(20, $estado_civil);
	$sql->bindValue(21, $escolaridade);
	$sql->bindValue(22, $naturalidade);
	$sql->bindValue(23, $data_agend);
	$sql->bindValue(24, $hora_agend);
	
    if ($sql->execute())
        echo true;
    else
        echo false;
}else {
    //alterar
    $sql = $con->prepare("UPDATE contato SET nome = ?, email = ? WHERE id = ?");
    $sql->bindValue(1, $nome);
    $sql->bindValue(2, $email);
    $sql->bindValue(3, $id);
    if ($sql->execute())
        echo true;
    else
        echo false;
}
