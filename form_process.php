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