<?php

if(isset($_POST['submit']))
{
    // echo "good job shaimaa!!";
    $username = $_POST["username"];
    $passowrd = $_POST["password"];
    $min =5;
    $names= array("shaimaa","shrouq","mahmoud");

    if( empty($_POST["username"]))
    {
        echo "you should enter the name"."<br>";
    }
    elseif( empty($_POST["password"]))
    {
        echo "you should enter the password"."<br>";
    }

    if(strlen($username)< $min)
    {
        echo "the user name should be more than 5 characters!"."<br>";
    } 
    
    if(strlen($passowrd)< $min)
    {
        echo "the password is too short!";
    }  
    else{ 
            // echo "Hello ". $username."<br>";
            // echo "your password is ". $passowrd;
            if(! in_array($username,$names))
            {
                echo "you are not allowed!";
            }else{
                echo "Hello ". $username."<br>";
            }
     }

}


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>form</title>
</head>
<body>


<form action="form.php" method="POST">

   <input type="text" placeholder="username" name="username"><br><br>
   <input type="password" placeholder="password" name="password"><br><br>
   <input type="submit" name="submit">

</form>
    
</body>
</html>