<?php
//Check if button register has been clicked
if (isset($_POST["btn_reg"])){
    //Start receiving data from the form
    $name=$_POST["x"];
    $email=$_POST["y"];
    $pass=$_POST["z"];

    //Encrypt password
    $encrypted_password=md5($pass);

    //Now connect to the database
require_once "db_connection.php";

//Prepare insert query to save the data
    $insertquery="INSERT INTO `users`(`id`, `jina`, `arafa`, `siri`) 
    VALUES (null,'$name','$email','$pass')";

    //Finally save by use of mysql_query()
    $save=mysqli_query($connection, $insertquery);

    //Check if the saving was successful
    if (isset($save)){
        header("location:register.php");
    }else{
        echo "User registration failed";
    }
}