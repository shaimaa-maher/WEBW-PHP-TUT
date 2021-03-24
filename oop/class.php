<?php

class car{

    function MoveWheels(){
        echo "wheels move";
    }
}

// if(class_exists("car")){
//  echo "class car";
// }

if(method_exists("car","MoveWheels")){

      echo "method is exist in class car";
}else{
    echo"method doesn't exist!";
}

?>







<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Class</title>
</head>
<body>
    
</body>
</html>