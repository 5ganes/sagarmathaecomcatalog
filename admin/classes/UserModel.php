<?php
class UserModel {
	private $table = 'tbl_user';

	function getByUsername($pdo, $username){
		$stmt = $pdo->prepare("SELECT * FROM $this->table WHERE username = :username");
		$criteria = [
			'username' => $username
		];
		$stmt->execute($criteria);
		return $stmt;
	}

}
