<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of newPHPClass
 *
 * @author leandro
 */

namespace lib\Dao;

require_once 'lib/config/config.inc.php';
class UserDao extends BaseDao {
	//put your code here
	private $db = null;

	const DB_SERVER = DB_HOST;
	const DB_USER = DB_USER;
	const DB_PASSWORD = DB_PASSWORD;
	const DB_NAME = DB_NAME;

	public function __construct() {
		$this->db = $this->$con();

	}

	public function get($useremail) {
		$sql = "SELECT * FROM user where user = :usermeial";

		$statement = $this->con()->prepare($sql);
		$statement->bindParam(':usermail', $useremail);

	}

	public function insert(array $values) {}
	public function update($id, array $values) {}
	public function delete($uniqueKey) {}

}
