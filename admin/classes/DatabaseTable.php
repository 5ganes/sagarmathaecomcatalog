<?php
class DatabaseTable {
	private $table;
	function __construct($table){
		$this->table= $table;
	}

	function insert($pdo, $record) {
		$keys = array_keys($record);          //output =  ['id', 'name', 'publish']
		$keysWithComma = implode(', ', $keys); // output = 'id, name, publish'
		$keysWithCommanColon = ':' . implode(', :', $keys); // output = ':id, :name, :publish'

		$stmt = $pdo->prepare("INSERT INTO $this->table($keysWithComma) 
		          VALUES($keysWithCommanColon)");
		
		$stmt->execute($record);          
	}

	function update($pdo, $record, $pk = 'id') {
		$keys = array_keys($record); $uKeys = [];
		foreach ($keys as $key) {
			$uKeys[] = $key . ' = :' . $key;
		}
		$ukeyString = implode(',', $uKeys);
		$stmt = $pdo->prepare("UPDATE $this->table SET $ukeyString WHERE $pk = :pk");

		$record['pk'] = $record[$pk];
		$stmt->execute($record);
	}

	public function findAll($pdo) {
		$stmt = $pdo->prepare("SELECT * FROM $this->table");
		$stmt->execute();
		return $stmt;
	}

	function find($pdo, $field, $value) {
		$stmt = $pdo->prepare("select * from $this->table where $field = :value");
		$criteria = [
			'value' => $value
		];
		$stmt->execute($criteria);
		return $stmt->fetch();
	}

	function delete($pdo, $field, $value) {
		$stmt = $pdo->prepare("delete from $this->table where $field = :value");
		$criteria = [
			'value' => $value
		];
		$stmt->execute($criteria);
	}

}