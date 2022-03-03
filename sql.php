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

        public function create($post, $table){
            
            echo '<pre>'.print_r($post,true).'</pre>';
            // $columns = implode(',',array_keys($data_array));
            // $place_holders = ':'.implode(',:', array_keys($data_array));
            $sql = "INSERT INTO $table(";
            foreach($post as $p=>$value){
                if($p != "table" && $p != "saveNew"){
                    if($p === array_key_last($post)){
                        $sql .= $p;
                    }else{
                        $sql .= $p.",";
                    }
                    // $sql .= $p.",";
                }
            }

            $sql .= ") VALUES (";

            foreach($post as $p=>$value){
                if($p != "table" && $p != "saveNew"){
                    if($p === array_key_last($post)){
                        $sql .= "'".$value."'";
                    }else{
                        $sql .=  "'".$value."',";
                    }
                    // $sql .= $p.",";
                }
            }
            $sql .= ")";

            echo $sql;
            // $sql = "Insert INTO $table ($columns) VALUES ($place_holders)";
            //  $stmt = $this->conn->prepare($sql);
    
            // $stmt->execute($data_array);
            // return $this->conn->lastInsertId();
    
        }
    
        public function read($sql_query){

            $columns = implode(',',array_keys($sql_query));
            $place_holders = ':'.implode(',:', array_keys($sql_query));
            
    
            $sql = "Read INTO $sql_query ($columns) VALUES ($place_holders)";
             $stmt = $this->conn->prepare($sql);
    
            $stmt->execute($sql_query);
            return $this->conn->lastInsertId();
    
    
    
        }
    
        public function update($sql_query){

            // $servername = "localhost";
            // $username = "root";
            // $password = "";
            // $dbname = "jarryd_test";
         
             // Create connection
             $conn = new mysqli();
                     // Check connection
                    //  if ($conn->connect_error) {
                    //      die("Connection failed: " . $conn->connect_error);
                    //      }

                    //  $sql = "UPDATE `game_time` SET `id`='[value-1]',`game`='[value-2]',`playtime`='[value-3]',`date_started`='[value-4]',`date_finished`='[value-5]',`player_name`='[value-6]' WHERE 0";

                    //  if ($conn->query($sql) === TRUE) {
                    //      echo "Record updated successfully";
                    //      } else {
                    //      echo "Error updating record: " . $conn->error;
                    //      }

                    //  mysqli_close($conn);
    
            $stmt = $this->conn->prepare($sql_query);
            $stmt->execute();
    
        }
    
            public function delete($sql_query){

                // $servername = "localhost";
                // $username = "root";
                // $password = "";
                // $dbname = "jarryd_test";
 
                //          // Create connection
                //          $conn = new mysqli($servername, $username, $password, $dbname);
                //          // Check connection
                //          if ($conn->connect_error) {
                //          die("Connection failed: " . $conn->connect_error);
                //          }
 
                //          // sql to delete a record
                //          $sql = "DELETE FROM `game_time` WHERE 1";
 
                //              if ($conn->query($sql) === TRUE) {
                //              echo "Record deleted successfully";
                //              } else {
                //              echo "Error deleting record: " . $conn->error;
                //              }
 
                //                  $conn->close();
    
                $stmt = $this->conn->prepare($sql_query);
                $stmt->execute();
    
            }

    }

?>

