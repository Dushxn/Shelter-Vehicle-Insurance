<?php 

    $servername = "localhost";
    $username = "root";
    $password = "";
    $database_name = "registration";

    $con = mysqli_connect($servername, $username, $password, $database_name);

    if(!$con)
    {
        die("Connection Failed:" . mysqli_connect_error());
    }

    if(isset($_POST['submit']))
    {
        $Policy_ID = $_POST['id'];
        $Policy_Name = $_POST['name'];
        $Date = $_POST['date'];
        $Years = $_POST['duration'];
        $des = $_POST['description'];
        
        $sql_query = "insert into agentpolicy ( policyID, policyName, dateCreated, duration, description)
        values ('$Policy_ID','$Policy_Name','$Date',' $Years','$des')";
        $result=mysqli_query($con, $sql_query);

        if($result)
        {
            //echo "Data added sucessfully!";
            echo"<script> alert('Data added sucessfully!') </script>";
            header('location:AgentPolicyDisplay.php');
        }else
        {
            echo "Error: ".$sql_query."".mysqli_error($con);
        }
    }
?>
    
