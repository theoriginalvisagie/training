<!DOCTYPE html>
 <!-- Bootstrap -->
 <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<!-- end -->
<html>
    <body>

            <?php
                
                $_SESSION["username"] = "demo";
                print_r($_SESSION);  

                echo "<form method='post'>
                <div class='text-center text-lg-start mt-4 pt-2'>
                                    <input type='submit' value='Logout' name='Logout' id='Logout' class='btn btn-default' style='padding-left: 2.5rem; padding-right: 2.5rem;'>                    
                                </div>
                            </form>";
                        echo "</div>
                        <div class='col-4'></div>
                        </div></div>";


                        if(isset($_POST['Logout']) && !empty($_POST['Logout']))
                        {

                            if($result){
                                //end session
                               session_destroy();
                            }
                            header("Location: http://localhost/training/login.php");
                        }else{
                            //Display login message
                            
                            echo "Welcome to the home page";
                        
                        }
            ?>
        <!-- Bootstrap -->
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
        <!-- end -->
    </body>
</html>


