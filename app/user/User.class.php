<?php

require_once "lib/database/mysql/database.php";
require_once "lib/data/session/Session.class.php";

class User {
	public $user;
	public $token;

	public function login($user, $password) {
		$r = new Database();
		$dbr = $r->select("login", "user='" . $user . "' and passwd='" . $password . "'");

		if ($dbr) {
			$this->user = $r->result[0];
			$session = new Session();
			$session->add(serialize($r->result[0]));
			return TRUE;
		} else {
			return FALSE;

		}}
	public function info() {
		$this->user = unserialize($_SESSION["user"]);
		//($user[0]->user);
		//$this->user->name = $user[0]->user;
		return $this->user;

	}
	public function getName() {
		return $this->name;
	}

	public function token($user_id = "1") {

		$r = new Database();
		$dbr = $r->select("token ", " user_id= '" . $user_id . "'");

		if ($dbr) {
			//print_r($r->result[0]);
			if ($this->verifyToken($r->result[0]->token) < 1) {
				echo " <br>menor<br>";
				$this->token = $r->result[0];
			} else {
				echo "<br> maior <br>";
				$this->updateToken($r->result[0]->token);
			}

		} else {
			$r->add();
			$this->token();

		}
		//verifica se o ultimo token já tem mais de 60 minutos

		//pega o ultimotoken e gera um novo
		//salva no banco
	}
	public function verifyToken($token = "") {
		//$now =

		//busca token e retorna quanto tempo falta pra expirar
		$r = new Database();
		$dbr = $r->select("token ", " token= '" . $token . "'");

		$dt1 = date('Y-m-d H:i:s');
		$dt2 = date($r->result[0]->date);
		echo $dt1 . "<br>";
		echo $dt2 . "<br>";
		if (is_string($dt1)) {
			$dt1 = date_create($dt1);
		}

		if (is_string($dt2)) {
			$dt2 = date_create($dt2);
		}

		//echo ($dt1 ."<br>". $dt2 ."<br>")//;

		$diff = date_diff($dt1, $dt2);

		echo $diff->i;

		return $diff->i;
		//print_r($r->result);

	}

	public function updateToken($token) {
		$r = new Database();
		$dbr = $r->edit($token);
	}

	public function geraToken() {
		$token = md5(uniqid(mt_rand(), TRUE));
	}

	public function add() {
		//receber parametros

		//inserir no banco
	}
}
