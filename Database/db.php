<?php

    //establish a connection with the database:

    $connection = mysqli_connect('127.0.0.1',
    'root','','loginapp');
    if(! $connection) 
    {
        //echo "connected to the database!"."<br>"; 
        die("connection fail");
    }

 



?>