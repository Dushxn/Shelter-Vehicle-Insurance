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

    if(isset($_POST['submitbtn']))
    {
        $First_Name = $_POST['firstName'];
        $Last_Name = $_POST['lastName'];
        $Address = $_POST['address'];
        $Mobile = $_POST['mobile'];
        $Email = $_POST['email'];
        $Inquire_Type = $_POST['type'];
        $Message = $_POST['message'];
        
        $sql_query1 = "insert into contactus ( fName, lName, address, teleNo, email, inquiryType, message)
        values ('$First_Name','$Last_Name','$Address',' $Mobile','$Email','$Inquire_Type','$Message')";
        $result=mysqli_query($con1, $sql_query1);

        if($result)
        {
            //echo "Data added sucessfully!";
            header('location:ContactUs.php');
        }else
        {
            echo "Error: ".$sql_query1."".mysqli_error($con1);
        }
    }
?>
    
