<?php 

    include "connection.php";

    if(isset($_POST['submitbtn1']))
    {
        $vehicleModel = $_POST['model'];
        $manufactureYr = $_POST['manufacture'];
        $licensePlate = $_POST['License'];
        $insuranceType = $_POST['type'];
        $chassisNo = $_POST['chassis'];
        
        

        $sql_query = "INSERT INTO vehicles (vehicle_model, manufacture_year, license_plate, insurance_type, chassis_number)
        VALUES ('$vehicleModel','$manufactureYr','$licensePlate','$insuranceType','$chassisNo')";

        if(mysqli_query($conn, $sql_query))
        {
            echo '<script> alert("Vahicle details added") </script>';
            header('Location: ../payment.php');
        }else
        {
            echo "Error: ".$sql."".mysqli_error($conn);
        }
    }

    if(isset($_POST['submitbtn2']))
    {
        $cardname = $_POST['cardname'];
        $cardno = $_POST['cardno'];
        $cardtype = $_POST['cardtype'];
        $expiremonth = $_POST['month'];
        $expireyear = $_POST['year'];
        
        $sql_query = "INSERT INTO payment (name_on_card, card_no, card_type, expire_month, expire_year)
        VALUES ('$cardname',$cardno,'$cardtype',$expiremonth,$expireyear)";

        if(mysqli_query($conn, $sql_query))
        {
            echo '<script language="javascript">';
            echo 'alert("Registration complete")';
            echo '</script>';
            header('Location: ../home.php');
        }else
        {
            echo "Error: ".$sql."".mysqli_error($conn);
        }
    }


    ?>