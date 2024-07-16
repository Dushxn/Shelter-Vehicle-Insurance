<?php 
    $servername = "localhost";
    $username = "root";
    $password = "";
    $database_name = "registration";

    $con = mysqli_connect($servername, $username, $password, $database_name);

    session_start();
    if (!isset($_SESSION['usersid'])) {
        header("Location:login.php");
        exit();
    }
    if(!$con)
    {
        die("Connection Failed:" . mysqli_connect_error());    
    }

    $Policy_ID = $_GET['updatepolicyID'];

    $sql_query = "select * from agentpolicy where policyID='$Policy_ID'";    
    $result=mysqli_query($con, $sql_query);
    $row =mysqli_fetch_assoc($result);
       
        $Policy_ID = $row['policyID'];
        $Policy_Name = $row['policyName'];
        $Date = $row['dateCreated'];
        $Years = $row['duration'];
        $des = $row['description'];

    if(isset($_POST['submit'])){
        $Policy_ID = $_POST['id'];
        $Policy_Name = $_POST['name'];
        $Date = $_POST['date'];
        $Years = $_POST['duration'];
        $des = $_POST['description'];
        
        $sql_query = "update agentpolicy set policyID='$Policy_ID', policyName='$Policy_Name' , dateCreated='$Date', duration= '$Years', description='$des' where policyID='$Policy_ID'";
        $result=mysqli_query($con, $sql_query);
        if($result)
        {
            //echo "Data updated sucessfully!";
            header('location:AgentPolicyDisplay.php');
        }else
        {
            echo "Error: ".$sql_query."".mysqli_error($con);
        }
    }
?>


<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Update Agent Policy</title>
    </head>
    <body>
        <?php 
            include "loginheader.php"; 
            include 'css/AgentPolicyCSS.php';
        ?>
        <hr>
        <div class ="background">

            <div class ="container">

            <h2>Update Agent Policy Details</h2>
            <form method ="POST">
            <div class ="form-group">
                    <label for="id">Policy ID</label>
                    <input type="text" placeholder="Enter policy ID" name="id" readonly="readonly" value=<?php echo $Policy_ID;?>>
                </div>
                <div class ="form-group">
                    <label for="name">Policy Name</label>
                    <input type="text" placeholder="Enter Policy Name" name="name" value=<?php echo $Policy_Name;?>>
                </div>
                <div class ="form-group">
                    <label for="date">Date Created</label>
                    <input type="text" placeholder="Enter date crreated" name="date" value=<?php echo $Date;?>>
                </div>
                <div class ="form-group">
                    <label for="duration">Duration</label>
                    <input type="text" placeholder="Enter duration" name="duration" value=<?php echo $Years;?>>
                </div>
                <div class ="form-group">
                    <label for="description">Description</label>
                    <input type="text" placeholder="Enter description" name="description" value=<?php echo $des;?>>
                </div>
                <div class ="form-group">
                    <button type="submit" value="submit" name="submit">Update</button>
                </div>
            </form>
            </div>
        </div>
        <div style="margin-bottom: -8px;"></div>
        <?php include "Footer.php" ?>
    </body>
</html>