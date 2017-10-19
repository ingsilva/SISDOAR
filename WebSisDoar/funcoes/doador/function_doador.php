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
$dd = $_POST["dd"];
$contato = $_POST["contato"];


if ($id == 0) {
    //salvar
    $sql = $con->prepare("INSERT INTO doador(nome, data_nascimento, cpf, rg, endereco, 
                                            numero, bairro, complemento, cidade_idcidade, idade, sexo, data_registro, num_sus, 
                                            expeditor, etnia, nome_pai, nome_mae, estado_civil, 
                                            escolaridade, naturalidade, dd, contato) 
						VALUES (?, ?, ?, ?, ?, 
							?, ?, ?, ?,  ?, 
							?, ?, ?, ?, ?, 
							?, ?, ?, 
                                                        ?, ?, ?, ?)");

    $sql->bindValue(1, $nome);
    $sql->bindValue(2, $data_nascimento);
    $sql->bindValue(3, $cpf);
    $sql->bindValue(4, $rg);
    $sql->bindValue(5, $endereco);
    $sql->bindValue(6, $numero);
    $sql->bindValue(7, $bairro);
    $sql->bindValue(8, $complemento);
    $sql->bindValue(9, $cidade_idcidade);
    $sql->bindValue(10, $idade);
    $sql->bindValue(11, $sexo);
    $sql->bindValue(12, $data_registro);
    $sql->bindValue(13, $num_sus);
    $sql->bindValue(14, $expeditor);
    $sql->bindValue(15, $etnia);
    $sql->bindValue(16, $nome_pai);
    $sql->bindValue(17, $nome_mae);
    $sql->bindValue(18, $estado_civil);
    $sql->bindValue(19, $escolaridade);
    $sql->bindValue(20, $naturalidade);
    $sql->bindValue(21, $dd);
    $sql->bindValue(22, $contato);
    
    if ($sql->execute())
        echo true;
    else
        echo false;
}else {
    //alterar
    $sql = $con->prepare("UPDATE doador SET nome = ?, data_nascimento = ?, cpf = ?, rg = ?, endereco = ?,  numero = ?, "
            . "bairro = ?, complemento = ?, cidade_idcidade = ?, idade = ?, "
            . "sexo = ?, data_registro = ?, num_sus = ?, expeditor = ?, etnia = ?, nome_pai = ? , nome_mae = ?,"
            . "estado_civil = ?, escolaridade = ?,  naturalidade = ? WHERE iddoador = ?");

    $sql->bindValue(1, $nome);
    $sql->bindValue(2, $data_nascimento);
    $sql->bindValue(3, $cpf);
    $sql->bindValue(4, $rg);
    $sql->bindValue(5, $endereco);
    $sql->bindValue(6, $numero);
    $sql->bindValue(7, $bairro);
    $sql->bindValue(8, $complemento);
    $sql->bindValue(9, $cidade_idcidade);
    $sql->bindValue(10, $idade);
    $sql->bindValue(11, $sexo);
    $sql->bindValue(12, $data_registro);
    $sql->bindValue(13, $num_sus);
    $sql->bindValue(14, $expeditor);
    $sql->bindValue(15, $etnia);
    $sql->bindValue(16, $nome_pai);
    $sql->bindValue(17, $nome_mae);
    $sql->bindValue(18, $estado_civil);
    $sql->bindValue(19, $escolaridade);
    $sql->bindValue(20, $naturalidade);
    $sql->bindValue(21, $id);

    if ($sql->execute())
        echo true;
    else
        echo false;
}
