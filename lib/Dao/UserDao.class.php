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
class UserDao extends BaseDao{
    //put your code here
    private $db = null;

    public function __construct(){
        $this->db = $this->$con();

    }

    public function get($useremail){
        $sql = "SELECT * FROM user where user = :usermeial";

        $statement = $this->con()->prepare($sql);
        $statement->bindParam(':usermail',$useremail);

    }



}

$userDao = new \lib\Dao\UserDao();
