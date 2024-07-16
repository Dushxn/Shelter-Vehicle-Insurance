<?php 

    include "connection.php";

    if(isset($_GET['id']))
    {
        $dID = $_GET['id'];

        $sql = "delete from `user_details` where ID=$dID";
        $result = mysqli_query($conn, $sql);
        if($result){
            header("Location:../agentprof.php");
        }else
        {
            die(mysqli_error($conn));
        }
    }