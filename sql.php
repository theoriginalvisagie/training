<?php
    class mySQLClass {
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
                   $dataArr = $row;
                   
                }
                $return = $dataArr;
            } else {
                $return = "Error" . $conn->error;
            }

            return $return;
            $conn->close();  
        }

        function mySQl($sql){
            $return = $this->dbConnect($sql);

            return $return;
        }
    }

?>

