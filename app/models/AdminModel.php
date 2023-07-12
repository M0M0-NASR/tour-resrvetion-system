<?php

class AdminModel extends DB{

    private $tableName = "admin"   ;
    private $conn ;

    public function __construct()
    {
        $this->conn = $this->connect();
    }

    public function getUser($username , $pass)
    {
        $db = $this->conn;
        $db->where('username' ,$username);
        $db->where('pass' , $pass);
        return $db->getone($this->tableName,null,["username" , "pass"]);
    }

}




?>