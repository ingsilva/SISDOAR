<?php
include"./config/conexao.php";
$sql = $con->query("SELECT * FROM estado");
$result = "";
$result .= "<table class='table table-striped' id='example2'><tr><td>ID</td><td>NOME</td><td>EMAIL</td><td>AÇÕES</td></tr>";
while($row = $sql->fetch(PDO::FETCH_OBJ)){
	$result .= "<tr>";
	$result .= "<td>".$row->idestado."</td>";
	$result .= "<td>".$row->nome."</td>";
	$result .= "<td>".$row->uf."</td>";
	$result .= "<td><a class='btn btn-default' id='editar' rel='".$row->idestado."'>Editar</a><a href='#' class='btn btn-primary' id='detalhes' rel='".$row->idestado."'>Detalhes</a> <a href='#' class='btn btn-danger' id='excluir' rel='".$row->idestado."'>Excluir</a></td>";
	$result .= "</tr>";
} 	  
$result .= "</table>";

echo $result;
?>