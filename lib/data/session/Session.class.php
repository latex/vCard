<?php
class Session{
	var $usuario;

	public function __construct(){
		$usuario->token="34ejdj43";
		if (session_id() == ""){
    		session_start();
    	}
	}
	public function __destruct(){
		session_destroy();
	}


	public function add($param){
		$_SESSION["user"] = $param;
		//print_r($param);
	}

	public function get(){}
	public function del(){}
	public function destroy(){}
	public function time(){}
	public function info(){}
	public function breadcrunb(){}

}
