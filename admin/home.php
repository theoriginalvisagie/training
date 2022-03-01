<!DOCTYPE html>
<html>
    <body>

            <?php
                
                $_SESSION["username"] = "demo";
                print_r($_SESSION);  

                echo "<form method='post'>
                <div class='text-center text-lg-start mt-4 pt-2'>
                                    <input type='submit' value='Logout' name='Logout' id='Logout' class='btn btn-primary btn-lg' style='padding-left: 2.5rem; padding-right: 2.5rem;'>                    
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
    </body>
</html>


