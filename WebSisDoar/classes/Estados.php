<?php

require_once 'Crud.php';

class Estados extends Crud{
	
	protected $table = 'estado';
	private $nome;
	private $uf;

        function getNome() {
            return $this->nome;
        }

        function setNome($nome) {
            $this->nome = $nome;
        }

        function getUf() {
            return $this->uf;
        }

        function setUf($uf) {
            $this->uf = $uf;
        }

        
	public function insert(){

		$sql  = "INSERT INTO $this->table (nome, uf) VALUES (:nome, :uf)";
		$stmt = DB::prepare($sql);
		$stmt->bindParam(':nome', $this->nome);
		$stmt->bindParam(':uf', $this->uf);
		return $stmt->execute(); 

	}

	public function update($id){

		$sql  = "UPDATE $this->table SET nome = :nome, uf = :uf WHERE id = :id";
		$stmt = DB::prepare($sql);
		$stmt->bindParam(':nome', $this->nome);
		$stmt->bindParam(':uf', $this->uf);
		$stmt->bindParam(':id', $id);
		return $stmt->execute();

	}

}