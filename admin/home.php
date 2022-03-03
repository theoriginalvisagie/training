
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.88.1">
    <title>Dashboard Template · Bootstrap v5.1</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/5.1/examples/dashboard/">

    

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <!-- end -->
        <!-- Favicons -->
    <link rel="apple-touch-icon" href="/docs/5.1/assets/img/favicons/apple-touch-icon.png" sizes="180x180">
    <link rel="icon" href="/docs/5.1/assets/img/favicons/favicon-32x32.png" sizes="32x32" type="image/png">
    <link rel="icon" href="/docs/5.1/assets/img/favicons/favicon-16x16.png" sizes="16x16" type="image/png">
    <link rel="manifest" href="/docs/5.1/assets/img/favicons/manifest.json">
    <link rel="mask-icon" href="/docs/5.1/assets/img/favicons/safari-pinned-tab.svg" color="#7952b3">
    <link rel="icon" href="/docs/5.1/assets/img/favicons/favicon.ico">
    <meta name="theme-color" content="#7952b3">


    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
    </style>

    
    <!-- Custom styles for this template -->
    <link href="dashboard.css" rel="stylesheet">
  </head>
  <body>

       
<?php      

    // require_once("../sql.php");


    //     if(isset($_POST['Logout']) && !empty($_POST['Logout'])){
    //         session_unset();
    //       session_destroy();
    //       header("Location: http://localhost/training/login.php");
    //     }

        echo "<header class='navbar navbar-dark sticky-top bg-dark flex-md-nowrap p-0 shadow'>
        <a class='navbar-brand col-md-3 col-lg-2 me-0 px-3' href='#'>Game Capture Report</a>
        <button class='navbar-toggler position-absolute d-md-none collapsed' type='button' data-bs-toggle='collapse' data-bs-target='#sidebarMenu' aria-controls='sidebarMenu' aria-expanded='false' aria-label='Toggle navigation'>
          <span class='navbar-toggler-icon'></span>
        </button>
        <input class='form-control form-control-dark w-100' type='text' placeholder='Search' aria-label='Search'>
        <div class='navbar-nav'>
          <div class='nav-item text-nowrap'>
            <form method='post'>
              <input type='submit' value='Logout' name='Logout' id='Logout' class='btn btn-dark' >   
            </form>
          </div>
        </div>
      </header>
      
      <div class='container-fluid'>
        <div class='row'>
          <nav id='sidebarMenu' class='col-md-3 col-lg-2 d-md-block bg-light sidebar collapse'>
            <div class='position-sticky pt-3'>
              <ul class='nav flex-column'>
                <li class='nav-item'>
                  <a class='nav-link active' aria-current='page' href='#'>
                    <span data-feather='home'></span>
                    Dashboard
                  </a>
                </li>
                <li class='nav-item'>
                  <a class='nav-link' href='#'>
                    <span data-feather='file'></span>
                    Players
                  </a>
                </li>
                <li class='nav-item'>
                  <a class='nav-link' href='#'>
                    <span data-feather='shopping-cart'></span>
                    Game List
                  </a>
                </li>

                <li class='nav-item'>
                  <a class='nav-link' href='#'>
                    <span data-feather='bar-chart-2'></span>
                    Reports
                  </a>
                </li>
                <li class='nav-item'>
                  <a class='nav-link' href='#'>
                    <span data-feather='layers'></span>
                    Integrations
                  </a>
                </li>
              </ul>
      
              <h6 class='sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-muted'>
                <span>Saved reports</span>
                <a class='link-secondary' href='#' aria-label='Add a new report'>
                  <span data-feather='plus-circle'></span>
                </a>
              </h6>
              <ul class='nav flex-column mb-2'>
                <li class='nav-item'>
                  <a class='nav-link' href='#'>
                    <span data-feather='file-text'></span>
                    Player Name
                  </a>
                </li>
                <li class='nav-item'>
                  <a class='nav-link' href='#'>
                    <span data-feather='file-text'></span>
                    Game
                  </a>
                </li>
                <li class='nav-item'>
                  <a class='nav-link' href='#'>
                    <span data-feather='file-text'></span>
                    Playtime
                  </a>
                </li>
                <li class='nav-item'>
                  <a class='nav-link' href='#'>
                    <span data-feather='file-text'></span>
                    Day Completed
                  </a>
                </li>
              </ul>
            </div>
          </nav>
      
          <main class='col-md-9 ms-sm-auto col-lg-10 px-md-4'>
            <div class='d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom'>
              <h1 class='h2'>Dashboard</h1>
              <div class='btn-toolbar mb-2 mb-md-0'>
                <div class='btn-group me-2'>
                  <button type='button' class='btn btn-sm btn-outline-secondary'>Share</button>
                <input type='submit' name='action' value='Add' class='btn btn-success'>
                </div>
                <button type='button' class='btn btn-sm btn-outline-secondary dropdown-toggle'>
                  <span data-feather='calendar'></span>
                  This week
                </button>
              </div>
            </div>
      
            <!-- DONT WORRY -->
            
            <!-- end -->
      
            <h2>SQL Data</h2>
            <div class='table-responsive'>";
              
            /**
             * @TODO:
             * Get data with sql statement
             * execute statment
             * sort data
             * create headings array
             * use loops to display headings and data in table
             */

            echo "<pre>" . print_r($_GET,true) . "</pre>";
            echo "<pre>" . print_r($_POST,true) . "</pre>";

            if(isset($_POST['action']))
            {
                if($_POST['action']=="Edit")
                {
                    //echo "Read data".$_POST['id'];
                   
                    //readRecord($_POST['id']);
                }
            }
            
            function readRecord($id)
            {
                echo "ID: ".$id;
                
            }


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
                    
                $sql = "SELECT * FROM game_time";
                $result = $conn->query($sql);
            
                $table = "";
            
                    $table ="<table class='table table-striped table-sm'>
                            <thead>
                              <tr>
                                <th scope='col'>#</th>
                                <th scope='col'>Game</th>
            
                                <th scope='col'>Play Time</th>
                                <th scope='col'>Date Started</th>
                                <th scope='col'>Date Finished</th>
                                <th scope='col'>Player Name</th>
                                <th scope='col'>Tools</th>
                              </tr>
                            </thead>
                            <tbody>";
                              
            
                if ($result->num_rows > 0) {
                  // output data of each row
                  while($row = $result->fetch_assoc()) {
                    echo "id: " . $row["id"] ."    <br>";
                    
                    echo "<pre>" . print_r($row) . "</pre>";
            
                    $table .="<tr>
                                <td>{$row['id']}</td>
                                <td>{$row['game']}</td>
                                <td>{$row['playtime']}</td>
                                <td>{$row['date_started']}</td>
                                <td>{$row['date_finished']}</td>
                                <td>{$row['player_name']}</td>
                                <td><form action='' method='post'>
                                <input type='submit' name='action' value='Edit' class='btn btn-warning'>
                                <input type='submit' name='action' value='Delete' class='btn btn-danger'>
                                <input type='hidden' name='id' value='{$row['id']}' >
                                </form></td>
                                

                              </tr>";   
                    
                  }
                } else {
                  echo "0 results";
                }
                
                $conn->close();
                    $row = readRecord($sql);
                $table .="</tbody>
                              </table>";
            
                              echo $table;
            
?>

            <?php

                
            function getRecord($id)
            {
                echo "ID: ".$id;
                
            }

                // if("input type='submit' name='action' value='Edit' class='btn btn-warning")

                //         $sql = "UPDATE `game_time` SET `id`='[value-1]',`game`='[value-2]',`playtime`='[value-3]',`date_started`='[value-4]',`date_finished`='[value-5]',`player_name`='[value-6]' WHERE 0";

                //         if ($conn->query($sql) === TRUE) {
                //             echo "Record updated successfully";
                //             } else {
                //             echo "Error updating record: " . $conn->error;
                //             }

                //         mysqli_close($conn);

                include_once "../Session.php";
                 Session::start();
                    if(!Session::exists('active_user'))  header("location: ../login.php");
    
                    include_once("../sql.php");
                    $sql = new mysqli();
                    $username = $sql->getRecord($_GET['id']);
    

                if(($_SERVER['REQUEST_METHOD'] == 'POST')){
        
                    $username->editRecord($_GET['id']);

    }
            
                            
            ?>

           

            <?php
            
            //    $servername = "localhost";
            //    $username = "root";
            //    $password = "";
            //    $dbname = "jarryd_test";

            //             // Create connection
            //             $conn = new mysqli($servername, $username, $password, $dbname);
            //             // Check connection
            //             if ($conn->connect_error) {
            //             die("Connection failed: " . $conn->connect_error);
            //             }

            //             // sql to delete a record
            //             $sql = "DELETE FROM `game_time` WHERE 0";

            //                 if ($conn->query($sql) === TRUE) {
            //                 echo "Record deleted successfully";
            //                 } else {
            //                 echo "Error deleting record: " . $conn->error;
            //                 }

            //                     $conn->close();
            ?>

            </div>
          </main>
        </div>
      </div>";
      



      <!-- Bootstrap -->
      <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
      <!-- end -->
     </body>
</html>
