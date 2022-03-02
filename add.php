<?php

include_once "sql.php";

class Crud{

    private $conn;

    public function __construct(){

        $this->conn = dbConnect();

    }

    public function create($data_array, $table){

     

    }
        
}

?>