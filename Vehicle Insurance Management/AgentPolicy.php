<?php
    include 'AgentPolicyConnection.php';
    session_start();
if (!isset($_SESSION['usersid'])) {
    header("Location:login.php");
    exit();
}
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Agent Policy</title>
    </head>
    <body>
        <?php 
            include "loginheader.php"; 
            include 'css/AgentPolicyCSS.php';
           
        ?>
        <hr>
        <div class ="background">

            <div class ="container">

            <h2>Agent Policy Details</h2>
            <form method ="POST">
                <div class="form1">
                <div class ="form-group">
                    <label for="id">Policy ID</label>
                    <input type="text" placeholder="Enter policy ID" name="id">
                </div>
                <div class ="form-group">
                    <label for="name">Policy Name</label>
                    <input type="text" placeholder="Enter Policy Name" name="name">
                </div>
                <div class ="form-group">
                    <label for="date">Date Created</label>
                    <input type="date" style="width: 500px; height: 20px;" placeholder="Enter date crreated" name="date">
                </div>                
                <div class ="form-group">
                    <label for="duration">Duration</label>
                    <input type="text" placeholder="Enter duration" name="duration">
                </div>
                <div class ="form-group">
                    <label for="description">Description</label>
                    <input type="text" placeholder="Enter description" name="description">
                </div>
                <div class ="form-group">
                    <button type="submit" value="submit" name="submit">Submit</button>
                    
                </div>
                
                </div>
            </form>
            </div>
        </div>
        <div style="margin-bottom: -8px;"></div>
        <?php include "Footer.php" ?>
    </body>
</html>