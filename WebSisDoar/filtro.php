<?php
	if( $_SERVER['REQUEST_METHOD']=='POST' )
	{
		$where = Array();

		$nome = getPost('n');
		$cidade = getPost('c');
		$bairro = getPost('b');


		if( $nome ){ $where[] = " `nome` = '{$nome}'"; }
		if( $cidade ){ $where[] = " `cidade` = '{$cidade}'"; }
		if( $bairro ){ $where[] = " `bairro` = '{$bairro}'"; }

		$sql = "SELECT nome, cidade, bairro FROM local ";
		if( sizeof( $where ) )
			$sql .= ' WHERE '.implode( ' AND ',$where );

		echo $sql;//execute a query aqui
	}
	//a cargo do leitor melhorar o filtro anti injection
	function filter( $str ){
		return addslashes( $str );
	}
	function getPost( $key ){
		return isset( $_POST[ $key ] ) ? filter( $_POST[ $key ] ) : null;
	}
?>
<style type="text/css">
label { display: block; }
</style>
<form action="" method="post">
	<label>Nome: <input type="text" name="n" /></label>
	<label>Cidade: <input type="text" name="c" /></label>
	<label>Bairro: <input type="text" name="b" /></label>


	<label><input type="submit" name="ok" value="Ok" /></label>
</form>