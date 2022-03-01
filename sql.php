

<?php

class mySQLWhy {
    function __construct(){

    }
    function dbConnect($sql){

        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbName = "jarryd_introduction";

        // Create connection
        $conn = new mysqli($servername, $username, $password, $dbName);

        // Check connection
        if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);

        }

        echo "Connected successfully";

       //$sql = "CREATE DATABASE myDB";
        if ($conn->query($sql) === TRUE) {
        echo "Database created successfully";
        } else {
        echo "Error creating database: " . $conn->error;
        }

        $conn->close();

                
    }
}

?>

