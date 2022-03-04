<?php
    class mySQLClass{
        function __construct(){

        }

        function dbConnect($sql){

            $servername = "localhost";
            $username = "root";
            $password = "";
            $dbName = "jarryd_test";

            // Create connection
            $conn = new mysqli($servername, $username, $password, $dbName);

            // Check connection
            if ($conn->connect_error) {
                die("Connection failed: " . $conn->connect_error);
            }

            $result = $conn->query($sql);

            
            if($result && $result->num_rows <= 0) {
                $return = "New record created successfully";
            }else if($result->num_rows > 0){
                while($row = $result->fetch_assoc()) {
                   $dataArr[] = $row;
                }
                $return = $dataArr;
            } else {
                $return = "Error" . $conn->error;
            }

            return $return;
            $conn->close();  
        }

        function getTableHeadings($table,$hidden=""){
            $where = "";
            if($hidden !=""){
                $hidden = explode(",",$hidden);

                foreach($hidden as $k=>$v){
                    $hidden[$k] = "'".$v."',"; 
                }

                $hidden = rtrim(implode("",$hidden),",");

                $where = "WHERE Field NOT IN ($hidden)";
            }
            

            $sql = "SHOW COLUMNS FROM $table $where";

            return $this->mySQl($sql);
        }

        

        function mySQl($sql){
            $return = $this->dbConnect($sql);

            return $return;
        }

        function insertSQL($post, $table){
            
            $sql = "INSERT INTO $table(";
            foreach($post as $p=>$value){
                if($p != "table" && $p != "saveNew"){
                    if($p === array_key_last($post)){
                        $sql .= $p;
                    }else{
                        $sql .= $p.",";
                    }
                }
            }
            $sql = rtrim($sql,",");
            $sql .= ") VALUES (";

            foreach($post as $p=>$value){
                if($p != "table" && $p != "saveNew"){
                    if($p === array_key_last($post)){
                        $sql .= "'".$value."'";
                    }else{
                        $sql .=  "'".$value."',";
                    }
                }
            }
            $sql = rtrim($sql,",");
            $sql .= ")";

            echo $sql;

            $res = $this-> mySQl($sql);
            if($res){
                echo "<div class='alert alert-success'>New record created successfully</div>";
                // echo "<script>location.reload()</script>";
            }else{
                echo "<div class='alert alert-danger'>Error: " . $sql . "<br>" . $this->dbConnect($sql) . "</div>";
            }
            // $sql = "Insert INTO $table ($columns) VALUES ($place_holders)";
    
        }

    }

?>

