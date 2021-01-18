<?php include "functions.php";  ?> 

<?php
if(isset($_POST['update']))
{
    updateInfo();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>update</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <link href="style.css" rel="stylesheet">

</head>
<body>
    
 <div class="main">
        <div class="col-xs-6 col-lg-3">
        <h1>Update User</h1>
            <form action="update_data.php" method="POST"> 
            <div class="mb-3">
                <label class="form-label">Username</label>
                <input type="text" class="form-control" id="username" name="username">
            </div>
            <div class="mb-3">
                <label class="form-label">Password</label>
                <input type="password" class="form-control" id="Password" name="password">
            </div>

             <div class="form-group">
             <select name="id" id="">

                <?php
                showAllData();
                ?>

             </select>
             </div>
             <br>
             <input type="submit" class="btn btn-primary" value="update" name="update">
            </form>
            <!-- View the data-->
            <form action="read_data.php" method="POST">
             <input type="submit" class="btn btn-success" value="View Data">
            </form>
        </div>
</div>

</body>
</html>