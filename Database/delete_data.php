<?php include "functions.php"; 
 deleteUser();
?>
<?php  include "includes/header.php"; ?>

    
<div class="container">
    <div class="col-xs-6 col-lg-6  text-center">
        <form action="delete_data.php" method="POST"> 
            <h2>select the id which you want to delete:</h2>
            <br>
            <div class="form-group">
                <select name="id" class="form-select">
                <option selected> </option>
                    <?php
                    showAllData();
                    ?>
                </select>
            </div>
            <br><br>
            <input type="submit" class="btn btn-danger" value="delete" name="delete">
            </form>

            <!-- View the data-->
            <form action="read_data.php" method="POST">
                <input type="submit" class="btn btn-primary" value="View Data">
            </form>
    </div>
</div>

<?php  include "includes/footer.php"; ?>
