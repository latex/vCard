<?php

namespace lib\vcard\database;

class conection {
        var $con;
        var $state;
        var $time;
        function __construct(){
            //verifica se já existe uma conexao se existir fecha
        }

        function __destruct(){
            $this->close();
        }
        function close(){
            //fecha a conexao
        }

        function open(){
            // abre uma conexao
        }
    }

//carragar conf
//conectar
//retornar objeto de conexao
