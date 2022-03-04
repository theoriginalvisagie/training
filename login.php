<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <!-- Bootstrap -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <!-- end -->

        <!-- Javacript -->
        <!-- end -->
        <!-- <title>Document</title> -->
</head>
    <body>
        <?php
         require_once("admin/Utilities/sql.php");
            echo "<div class='container'>
                    <div class='row'>
                    <div class='col-4'></div>
                        <div class='col-4'>";
            echo "<form method='post'>
                    <div class='d-flex flex-row align-items-center justify-content-center justify-content-lg-start'>
                    <h2 >Sign in</h2>
                    </div>
        
                    <!-- Email input -->
                    <div class='form-outline mb-4'>
                    <input type='text' id='username' name='username' class='form-control form-control-lg' placeholder='Enter a valid username' />
                    </div>
        
                    <!-- Password input -->
                    <div class='form-outline mb-3'>
                    <input type='password' id='password' name='password' class='form-control form-control-lg' placeholder='Enter password' />
                    </div>
        
                    <div class='text-center text-lg-start mt-4 pt-2'>
                        <input type='submit' value='Login' name='Login' id='Login' class='btn btn-primary btn-lg' style='padding-left: 2.5rem; padding-right: 2.5rem;'>                    
                    </div>
                  </form>";
            echo "</div>
            <div class='col-4'></div>
            </div></div>";

            // echo '<pre>'.print_r($_POST,true).'</pre>';

            if(isset($_POST['Login']) && !empty($_POST['Login'])){
                $mysql = new mySQLClass();
                $username = $_POST['username'];
                $password = $_POST['password'];

                $sql = "SELECT user,password,accessRights FROM users WHERE user = '$username' AND password = '$password'";
              
                $result = $mysql->mySQl($sql);

                if($result){
                    session_start();
                    $_SESSION["username"] = "demo";      
                    echo "Welcome to the home page";
                    sleep("5");
                    header("Location: http://localhost/training/admin/Modules/Home/index.php");
                }else{
                    // echo "Welcome to the home page";
                
                }
                
            }
        ?>
        <!-- Bootstrap -->
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
        <!-- end -->
    </body>
</html>