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

abstract class BaseDao {
    private $db = null;

    const DB_SERVER = self::DB_HOST;
    const DB_USER = self::DB_USER;
    const DB_PASSWORD = self::DB_PASSWORD;
    const DB_NAME = self::DB_NAME;


    protected function con() {
        $dsn = 'mysql:dbname='.self::DB_NAME.';host='.self::DB_SERVER;

        try {
                $this->db= new \PDO($dsn, self::DB_USER, self::DB_PASSWORD);
            }
        catch (\PDOException $e) {
                throw new Exception('Conexion failed'. $e->getMessage());
            }
        return $this->db;
    }
    abstract protected function get($uniquekey);
    abstract protected function insert(array $values);
    abstract protected function update($id,array $values);
    abstract protected function delete($uniqueKey);


}
