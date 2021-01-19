<?php include "db.php";


function showAllData(){

// put here to be seen in the function.
        global $connection;
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
    global $connection;

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

      //prepare the data in a variables: 
      $username = $_POST['username'];
      $password = $_POST['password'];

      global $connection;

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


function updateInfo()
{  
    //getting the new information:
    $id=$_POST['id'];
    $username = $_POST['username'];
    $password = $_POST['password']; 

    global $connection;
    
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


function deleteUser()
{   
    global $connection;
    $id=$_POST['id'];

    $query = "DELETE FROM users ";
    $query .= " WHERE id = $id";

      
    //confirm the query: 
    $result = mysqli_query($connection,$query);
    if(!$result)
    {
        die('Query FAILD'. mysqli_error($connection));
    }else{
        echo "the user is deleted";
    }

    
}




?>