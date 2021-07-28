<?php
$host="localhost";
$user="root";
$password="";
$database="afternoon_class_system";

$connection=mysqli_connect($host, $user, $password, $database);
//Check if the connection failed
if (!isset($connection)){
    die("Connection failed");
}