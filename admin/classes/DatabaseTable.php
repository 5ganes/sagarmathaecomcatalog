<?php
class DatabaseTable {
	public $table; global $pdo;
	function __construct($table){
		$this->table= $table;
	}

	function insert($record) {
		$keys = array_keys($record);          //output =  ['id', 'name', 'publish']
		$keysWithComma = implode(', ', $keys) // output = 'id, name, publish'
		$keysWithCommanColon = ':' . implode(', :', $keys); // output = ':id, :name, :publish'

		$stmt = $this->pdo->prepare("INSERT INTO $this->table($keysWithComma) 
		          VALUES($keysWithCommanColon)");
		
		$stmt->execute($record);          
	}

	function update($record, $pk) {

	}

	public function findAll() {
		$stmt = $pdo->prepare("SELECT * FROM $this->table");
		$stmt->execute();
		return $stmt;
	}

	function find($field, $value) {
		select * from table where field = value
	}

	function delete($field, $value) {
		delete from table where field = value
	}

}