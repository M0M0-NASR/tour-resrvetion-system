<?php
class ProductModel extends DB {
    protected $table = "product";
    protected $connect;
    
    public function __construct()
    {
        $this->connect =  $this->connect();
    }

    public function getProducts()
    {
        return $this->connect->get($this->table);
    }

    public function insertProduct($data)
    {
        return $this->connect->insert($this->table,$data);
    }

    public function getRow($id)
    {
        $db = $this->connect->where("id" , $id);
        return $db->getOne($this->table);
    }

    public function updateRow($id,$data)
    {
        $db = $this->connect;
        $db->where("id", $id);
        $db->update($this->table , $data);
    }

    public function deleteRow($id)
    {
        $db = $this->connect->where("id" , $id);
        return $db->delete($this->table);
    }

}


?>