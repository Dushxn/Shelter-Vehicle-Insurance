<?php

$con= new mysqli('localhost', 'root', '','registration');

if($con){
    echo "";
}
    else{
    die(mysqli_error($con));
}

?> 