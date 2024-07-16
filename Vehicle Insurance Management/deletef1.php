<?php
include 'anvdbcon.php';
if(isset($_GET['deleteid'])){
    $ID=$_GET['deleteid'];

    $sql="delete from `addnew` where id=$ID";
    $result=mysqli_query($con,$sql);
    if($result){
       // echo "Successfully Deleted";
       header('location:f1update.php');
    }else{
        die(mysqli_error($con));
    }
}

?>