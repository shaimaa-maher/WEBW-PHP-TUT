<?php include "db.php";


function showAllData(){

    global $connection; // put here to be seen in the function.
    $query="SELECT * FROM users";
    $result  = mysqli_query($connection,$query);

    if(!$result)
    { 
        die('Query FAILD' . mysqli_error(1)); 
    }

    while($row = mysqli_fetch_assoc($result))
    {    
        $id = $row['id']    ;       
        echo "<option value='$id'>$id</option>";
    }
}

function read_data()
{
    global $connection; // put here to be seen in the function.
    $query = "SELECT * FROM users";
    $result = mysqli_query($connection,$query);

    if(!$result){
    die('query failed');
    } 
    else{

        while($row = mysqli_fetch_assoc($result))
            {    
                $id = $row['id']; 
                $username =$row['username'];      
                echo "<p>
                    $id-$username 
                </p>";
            }
    }
}

function insertData()
{ 
     global $connection;
    if(isset($_POST['create']))
      {   
       
        if( empty($_POST["username"]))
        {
                echo "you should enter the name"."<br>";
        }
        elseif( empty($_POST["password"]))
        {
            echo "you should enter the password"."<br>";
        }else{
            //prepare the data in a variables: 
            $username = $_POST['username'];
            $password = $_POST['password'];

            //prevent sql injection
            $username = mysqli_real_escape_string($connection,$username);
            $password = mysqli_real_escape_string($connection,$password);

            //Encrypt the password
            $hashFormat= "$2x$10$";
            $salt= "iwilldevelopeagreatweb";
            $hashF_and_salt = $hashFormat . $salt;
            $password = crypt($password, $hashF_and_salt);
    

            //query to store the data into the database:
            $query = "INSERT INTO users(username,password) VALUE('$username','$password')";
            $result = mysqli_query($connection,$query);
        
            if(!$result)
            {
                die('failed to login');
            } else{
                echo "the user is inserted successfully!";
            }
        }
      }  
          
}


function updateInfo()
{ 
     global $connection;
     if(isset($_POST['update']))
{
    //getting the new information:
        if( empty($_POST["username"]))
        {
            echo "you should enter the name"."<br>";
        }
        elseif( empty($_POST["password"]))
        {
            echo "you should enter the password"."<br>";
        }else{
            $id=$_POST['id'];
            $username = $_POST['username'];
            $password = $_POST['password']; 
        
        
            //the update query:
            $query  = "UPDATE users SET";
            $query .= " username = '$username',";
            $query .= " password = '$password'";
            $query .= " WHERE id = $id";
            
            //confirm the query: 
            $result = mysqli_query($connection,$query);
            if(!$result)
            {
                die('Query FAILD'. mysqli_error($connection));
            }else{
                echo "the data is updated";
            }
        }
 }
}


function deleteUser()
{   
    global $connection;

    if(isset($_POST['delete']))
    {
        if(isset($_POST['id']))
        {
            if(empty($_POST['id']))
            {
                echo "you should choose id to delete";
            }else{
                    $id=$_POST['id'];

                    $query = "DELETE FROM users ";
                    $query .= " WHERE id = $id";

                    
                    //confirm the query: 
                    $result = mysqli_query($connection,$query);
                    if(!$result)
                    {
                        die('Query FAILD'. mysqli_error($connection));
                    }
                    else{
                        echo "the user is deleted";
                    }

                }
        }
}
}




?>