<?php  include "functions.php";?>
<?php  insertData();?>
<?php  include "includes/header.php"; ?>



    <div class="container">
        <div class="col-xs-6 col-lg-3">
        <h1>Create User</h1>
            <form action="create_data.php" method="POST"> 

                <div class="mb-3">
                    <label class="form-label">Username</label>
                    <input type="text" class="form-control" id="username" name="username">
                </div>

                <div class="mb-3">
                    <label class="form-label">Password</label>
                    <input type="password" class="form-control" id="Password" name="password">
                </div>

                <input type="submit" class="btn btn-success" value="create" name="create">
            </form>
            <!-- View the data-->
            <form action="read_data.php" method="POST">

                <input type="submit" class="btn btn-primary" value="View Data" >
              
            </form>
        </div>
    </div>
<?php  include "includes/footer.php"; ?>