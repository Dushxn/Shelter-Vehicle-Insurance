<?php
include 'connection.php';

if(isset($_GET['deleteid'])){
    $pno=$_GET['deleteid'];

    $sql = "delete from `policy` where `p_no` = $pno ";
    $result= mysqli_query($conn,$sql);

    if($result){
        //echo "Deleted successfully";
        header('location:../display.php');
    }else{
        die(mysqli_error($conn));
    }
}


?>