<?php 
    $servername = "localhost";
    $username = "root";
    $password = "";
    $database_name = "registration";

    $con1 = mysqli_connect($servername, $username, $password, $database_name);

    if(!$con1)
    {
        die("Connection Failed:" . mysqli_connect_error());    
    }

    $Mobile = $_GET['viewteleNo'];

    $sql_query1 = "select * from contactus where teleNo='$Mobile'";    
    $result=mysqli_query($con1, $sql_query1);
    $row =mysqli_fetch_assoc($result);
       
        $First_Name = $row['fName'];
        $Last_Name = $row['lName'];
        $Address = $row['address'];
        $Mobile = $row['teleNo'];
        $Email = $row['email'];
        $Inquire_Type = $row['inquiryType'];
        $Message = $row['message'];

    if(isset($_POST['submitbtn'])){
        $First_Name = $_POST['firstName'];
        $Last_Name = $_POST['lastName'];
        $Address = $_POST['address'];
        $Mobile = $_POST['mobile'];
        $Email = $_POST['email'];
        $Inquire_Type = $_POST['type'];
        $Message = $_POST['message'];
        
        $sql_query1 = "view contactus set fName='$First_Name', lName='$Last_Name' , address='$Address', teleNo= '$Mobile', email='$Email', inquiryType= '$Inquire_Type', message='$Message' where teleNo='$Mobile'";
        $result=mysqli_query($con1, $sql_query1);
    
        if($result)
        {
            //echo "Data viewed sucessfully!";
            header('location:ContactUsDisplay.php');
        }else
        {
            echo "Error: ".$sql_query1."".mysqli_error($con1);
        }
    }
?>


<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title> View Inquiry</title>
        <style>

            .background {
                background-image: url("https://uploads-ssl.webflow.com/60b3da0d84c6fc314ee1893f/60b8b34f92d47ef7e9ce9382_bg-home-advantage-marketing-template-p-500.jpeg");
                padding-top: 0px;
                padding-bottom: 35px;
                background-repeat: no-repeat;
                background-size: 100% 800px;  
            }
          
            p{
                font-size: 18px;
            }

            .btn5{
                background-color:#96AEBB;
                border: 3px solid #738B98;
                border-radius: 4px;
                cursor: pointer;
                align: center;
                margin-left: 700px;
                margin-top: 50px;
                margin-bottom: -20px;
                width: 110px;
                height: 40px;

            }
            .btn5:hover {
            background-color: #7491A0;           
            }
            .btn5 a{
                color:black;
                weight: 100px;
            }
  
            a:link {
            text-decoration: none;
            }

            a:visited {
            text-decoration: none;
            }

            a:hover {
            text-decoration: none;
            }

            a:active {
            text-decoration: underline;
            }
           
        </style>
    </head>
    <body>
        <?php 
            include "loginheader.php"; 
        ?>
        <hr>
        <div class ="background">

            <div class ="container">

            <h2 style="padding: 40px 0px 20px 0px;" ><center><u><b>View Inquiry Details</b></u><center></h2>
            <?php
                echo'
                <form>
                <center>
                    <p><b> First Name: </b>'.$First_Name.'</p>
                    <p><b> Last Name: </b>'.$Last_Name.'</p>
                    <p><b> Address: </b>'.$Address.'</p>
                    <p><b> Telephone Number: </b>'. $Mobile.'</p>
                    <p><b> E-mail: </b>'.$Email.'</p>
                    <p><b> Inquiry Type: </b>'.$Inquire_Type.'</p>
                    <p><b> Message: </b>'.$Message.'</p>
                    </center>
                </form>
                '           
            ?>
                <div>
                <button class="btn5"><a href="ContactUsDisplay.php"><b>Back</b></a></button>
                </div>
            </div>
        <div style="margin-bottom: 90px;"></div>
        </div>
        <?php include "Footer.php" ?>
    </body>
</html>