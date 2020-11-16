<?php
class Product {
    public function __construct($db){
        $this->conn = $db;
    }

    function prodRead(){
        $query = "SELECT * FROM products";
        $stmt = $this->conn->prepare($query);
        $stmt->execute();
        return $stmt;
    }
}
?>