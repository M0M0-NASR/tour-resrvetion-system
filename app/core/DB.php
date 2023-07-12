

<?php

require_once(LIBS."DB".DS."MysqliDb.php");

// this class to treat with third party " MysqliDb class"

class DB {
    
    private $db;

    public function connect(){
        try
        {
            $this->db = new MysqliDb(HOST,USER,PASS,DBNAME) ;
            $this->db->connect();
            return $this->db;
        }        
        catch(\Throwable $th)
        {
            echo "ERROR: DB cannot connect";
        }

    }
}
?>