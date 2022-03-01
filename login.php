<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

<?php

function displayLogInForm()
{
    
    echo "<div class ='container'>
          <div class='row'>
             <div class='col align-self-start'>
            </div>
            <div class='col align-self-centre'>
           
                <h1>Login</h1>
                    <form method='post'>
                    <input type='text' name='demo' placeholder='Username' />
                    <input type='password'  name='demo123' placeholder='Password' />
                    <input type='submit' value='Login' name='login' />
                    <input type='submit' value='End' name='end' />
                    </form>;
            </div>
                <div class= 'col align-self-end'>
            <div>
        /<div>
    </div>";

}


{
    
    echo"< header  ='navbar navbar-default navbar-static-top'/>
<div class ='container-fluid'/>
    <div class ='navbar-header'/>
        <a href='#' class ='navbar-brand'></a>
        <button type='button' class ='navbar-toggle' data-toggle='collapse' data-target=''.navbar-collapse'><i class ='fa fa-bars'></i></button>
    </div>
    <div class ='navbar-collapse collapse'>
        <ul class ='nav navbar-nav navbar-righ'>
        </ul>
    </div>
</div>
</header>";

}

echo displayLogInForm();

echo '<pre>'.print_r($_POST,true).'</pre>';

$sql = "SELECT * FROM jarryd_introduction WHERE username = '$username' AND password = '$password'";
$result = $conn -> query($sql);
if($result -> num_rows > 0 )
{
    while($row = $result -> fetch_array()){
        ?>
        <td align= "centre"><?php echo $row ['username'] ;?></td>
        <td align= "centre"><?php echo $row ['password'] ;?></td>
    }
    <?php
    {

    }   
            echo "<centre><p> No Records</p></centre>";
    

    $conn-> close();

    }  

};


?>

<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>