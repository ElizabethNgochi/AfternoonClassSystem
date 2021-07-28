<?php
//Check of the delete button has been clicked
if (
    isset($_GET ["my_id"])
){
    $id=$_GET["my_id"];

    //Connect to the database
    require_once "db_connection.php";

    //Prepare the delete query
    $deletequery="DELETE FROM users WHERE id=$id";
    //Finally delete using mysqli_query()
    $delete=mysqli_query($connection, $deletequery);
    if (isset($delete)){
        //Redirect back to users.php to see changes
        header("location:users.php");
    }else{
        echo "Deletion failed";
    }
}
