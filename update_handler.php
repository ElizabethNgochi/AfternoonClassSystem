<?php
//Check if button update has been clicked
if (isset($_POST["btn_update"])){
    $id=$_POST["id_yangu"];
    $update_name=$_POST["x"];
    $update_email=$_POST["y"];
    $update_password=$_POST["z"];

    $encrypted_password=md5($update_password);

    //Connect to the database
    require_once "db_connection.php";

    $update_query="UPDATE `users` SET `jina`='$update_name',`arafa`='$update_email',
`siri`='$update_password' WHERE id='$id'";

    $update=mysqli_query($connection, $update_query);

    if (isset($update)){
        header("location:users.php");
    }else{
        echo "Updating failed";
    }

}