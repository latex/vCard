<?php


namespace lib\database;


class Database{
        var $con;
        $conection_string = "mysql:host=localhost;dbname=vcard_db","latex","123";
        var $time;
        function __construct(){
            //verifica se já existe uma conexao se existir fecha

        }

        function __destruct(){
            if ($this->state == true) {
            	# code...
            	$this->close();
            }


        }




        function close(){
            //fecha a conexao
            unset($this->con);
        }

    /**
     *
     */
    function open(){
            // abre uma conexao
    		try {

    			//conection
    			$this->con = PDO($this->conection_string);

    			$this->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    			$this->state = true;

    		} catch (PDOException $e) {

    			echo "Falha na conexão: " . $e->getMessage();

    		}
    		return this->state;
        }
    function config(){

    }
}
