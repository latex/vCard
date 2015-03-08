<?php

class Database{
        public static $instance;
       	public $result ;


        function __construct(){
            //verifica se já existe uma conexao se existir fecha

        }

        function __destruct(){

        }

    /**
     *
     */
  	public static function getinstance()
  	{
  		if (!isset(self::$instance))
  		{
  			self::$instance = new PDO('mysql:host=localhost;dbname=vcard_db', 'root', '123', array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"));
  			self::$instance->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  			self::$instance->setAttribute(PDO::ATTR_ORACLE_NULLS, PDO::NULL_EMPTY_STRING);
  		}
  		return self::$instance;
  	}





  	public function prepara(){

  		//recebe parametros - nome tabela -colunas -where

  	}



  	public function select($table,$where){
  		try
  		{
  			$sql = "SELECT * FROM ".$table. " WHERE ".$where."";
  			//echo $sql;

  			$rs = self::getinstance()->prepare($sql);

  			$rs->execute();

  			$this->result = $rs->fetchAll(PDO::FETCH_OBJ);
  			if (!empty($this->result)) {
  				//print_r($this->result);

  			return true;
  			}
  			else {
  				return false;
  			}

  		}
  		catch (Exception $e)
  		{
  			print "Ocorreu um erro ao tentar executar esta ação, foi gerado um LOG do mesmo, tente novamente mais tarde.<br>";
  			//GeraLog::getInstance()->inserirLog("Erro: Código: " . $e-> getCode() . " Mensagem: " . $e->getMessage());
  		}
  	}

  	public function add($token=""){
  		$sql = "INSERT INTO token VALUES (null,:token,:user_id,:date)";
		 $token = md5(uniqid(mt_rand(), TRUE));
		$user_id = 1;
		$date = date('Y-m-d H:i');
		//echo $date;


		$rs = self::getinstance()->prepare($sql);

		$rs->execute(array(':token'=>$token,':user_id'=>$user_id,':date'=>$date));
	}



	public function edit($token=""){
		$sql = "UPDATE token SET token = :token2, date = :date WHERE token = :token";
		//echo "<br>" .$sql ."<br>";

		$token2 = md5(uniqid(mt_rand(), TRUE));

		$user_id = 1;
		$date = date('Y-m-d H:i:s');
		echo "nova update<br>";




		$rs = self::getinstance()->prepare($sql);


		$rs->execute(array(':token'=>$token,':date'=>$date, ':token2'=>$token2,));
		echo $token;
	}
}
