<?php
 $servername = "localhost";
 $username = "root";
 $password = "";
 $database_name = "registration";

 $conn = mysqli_connect($servername, $username, $password, $database_name);

 if(!$conn)
 {
     die("Connection Failed:" . mysqli_connect_error());
 }else
 {
     
 }
 ?>