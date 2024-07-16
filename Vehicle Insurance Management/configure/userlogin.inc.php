<?php
include "connection.php";
include "fuctions.inc.php";

if(isset($_POST['submitbtn']))
{
    $username1 = $_POST['username'];
    $password1 = $_POST['pword'];

    Loginuser($conn, $username1, $password1 );
}else {
    header("Location:../login.php");
    exit();
}