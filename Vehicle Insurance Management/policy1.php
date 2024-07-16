<?php 
    session_start();
    include "loginheader.php";
    if(!isset($_SESSION['username']))
    {
        header("Location:login.php");
        exit();
    }
    
?>

<?php

include 'configure/connection.php';

if(isset($_POST['submit'])){
  $pno= $_POST['pno'];
  $desc= $_POST['policy'];
  $date= $_POST['date'];
  $auth= $_POST['auth'];

  $sql= "INSERT INTO policy (p_no,description,date,auth_by)
  values($pno,'$desc','$date','$auth')";

  $result=mysqli_query($conn,$sql);

  if($result){
    //echo "Data inserted successfully";
    header('location:display.php');

  }else{
    die(mysqli_error($conn));
  }

}

include "css/adminprofcss.php";
?>

<style>
    .top {
      
      padding: 20px;
      text-align: center;
    }
    
    .content {
      max-width: 800px;
      margin: 0 auto;
      padding: 20px;
    }
    .content label {
      display: block;
      font-weight: bold;
      margin-bottom: 5px;
    }
    
    .content input[type="text"],
    .content input[type="number"],
    .content input[type="date"],
    .content textarea {
      width: 100%;
      padding: 10px;
      border: 1px solid #ccc;
      border-radius: 4px;
    }

    .actions {
      text-align: center;
    }
    
    .actions button {
      padding: 10px 20px;
      background-color: #333;
      color: #fff;
      border: none;
      border-radius: 4px;
      cursor: pointer;
    }
    
    .actions button:hover {
      background-color: #999;
    }

</style>

<div class="top">
    <h1>Policy Managment</h1>
    <h2>Add New Policy</h2>
</div>

<div class="content">
    <form method="post">
        <label>Policy Number:</label><br>
        <input type="text" name="pno" required><br><br>

        <label>Policy:</label><br>
        <textarea name="policy" rows="4" required></textarea><br><br>

        <label>Date:</label><br>
        <input type="date" name="date"><br><br>

        <label>Authorized by:</label><br>
        <input type="text" name="auth" required><br><br>

        <div class="actions">
        <button type="submit" name="submit">Add</button>
        <button type="reset">Reset</button>
        </div>

    </form>
    
</div>

<?php
include 'Footer.php';
?>