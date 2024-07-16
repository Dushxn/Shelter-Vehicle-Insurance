<?php


$servername = "localhost";
$username = "root";
$password = "";
$database_name = "registration";

$con = mysqli_connect($servername, $username, $password, $database_name);

if(!$con){
    die("Connection Failed:" . mysqli_connect_error());
}
else{
    //echo "success!";
}




?>