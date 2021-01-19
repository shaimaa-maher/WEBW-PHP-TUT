<?php include "functions.php"; 

if(isset($_POST['delete']))
{
    deleteUser();
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Delete the users</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <link href="style.css" rel="stylesheet">

</head>
<body>
    
<div class="main">
        <div class="col-xs-6 col-lg-3">
            <form action="delete_data.php" method="POST"> 
            
             <h2>select the id which you want to delete:</h2>
             <br>
             <div class="form-group">
             <select name="id" id="">

                <?php
                showAllData();
                ?>

             </select>
             </div>
            <br>
            <input type="submit" class="btn btn-primary" value="delete" name="delete">
            </form>


             <!-- View the data-->
             <form action="read_data.php" method="POST">

                 <input type="submit" class="btn btn-success" value="View Data">

            </form>
        </div>
</div>
</body>
</html>