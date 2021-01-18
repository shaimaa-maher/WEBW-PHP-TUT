<?php
     include "functions.php";      
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Read</title>
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" 
    rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" 
    crossorigin="anonymous">
    <link href="style.css" rel="stylesheet">


</head>

<body>
    

    <div class="main">
        <div class="col-xs-6 col-lg-3">
            <h1>All User</h1>
            <?php
                read_data();
            ?>
        </div> 
        
        <!--the buttons -->
        <div class="btns">
            <form action="update_data.php" method="POST"> 
            <input type="submit" class="btn btn-warning" value="update">
            </form>

            <form action="create_data.php" method="POST">
                <input type="submit" class="btn btn-success" value="create" >
            </form>

            <form action="delete_data.php" method="POST">
            <input type="submit" class="btn btn-danger" value="delete" >
            </form>
        </div>
    </div>


</body>
</html>