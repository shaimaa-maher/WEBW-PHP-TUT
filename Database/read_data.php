<?php
     include "functions.php";      
?>

<?php  include "includes/header.php"; ?>

    <div class="text-center">
        <div>
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

<?php  include "includes/footer.php"; ?>
