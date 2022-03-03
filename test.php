<?php

    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "jarryd_test";

    // Create connection
    $conn = mysqli_connect($servername, $username, $password, $dbname);
    // Check connection
    if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
    }
            
        $sql = "CREATE Table GameTime(
            id Int(11)UNSIGNED AUTO_INCREMENT PRIMARY KEY,
            player_name TEXT,
            game Int(11) NOT NULL,
            playtime TEXT,
            date_started DATE,
            date_finsihed TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
            )";

                if ($conn->query($sql) === TRUE) {
                    echo "Table Game Time created successfully";
                } else {
                    echo "Error creating table: " . $conn->error;
                }
                
                $conn->close();
  
?>


