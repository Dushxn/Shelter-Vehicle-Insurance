<?php 
    include "fuctions.inc.php";

    if(isset($_POST['submitbtn']))
    {
        $first_name = $_POST['FName'];
        $last_name = $_POST['LName'];
        $dob = $_POST['dob'];
        $nic = $_POST['nic'];
        $gender = $_POST['Gender'];
        $street_1 = $_POST['street1'];
        $street_2 = $_POST['street2'];
        $city = $_POST['city'];
        $province = $_POST['province'];
        $zip_code = $_POST['zipcode'];
        $phone = $_POST['phone'];
        $email = $_POST['Email'];
        $username1 = $_POST['username'];
        $passwordnew = $_POST['password'];

        require_once "connection.php";
        $uidCheck = uidExist($conn, $username1);

        if($uidCheck !== false){
            header("Location:../registration.php?error=UsernameExist");
            exit();
        }
        
        $sql_query = "INSERT INTO user_details (first_name, last_name, NIC, dob, gender, street_address_1, street_address_2, city, province, postal_code, mobile, email, username,  password)
        VALUES (?,?,?,?,?,?,?,?,?,?,?,?,?,?)";  
        $stmt = mysqli_stmt_init($conn);
        if(!mysqli_stmt_prepare($stmt, $sql_query)){
            echo "error";
            exit();}
            $hashedPW = password_hash($passwordnew, PASSWORD_DEFAULT);
            mysqli_stmt_bind_param($stmt, "sssssssssiisss", $first_name, $last_name, $nic, $dob,  $gender, $street_1, $street_2, $city, $province, $zip_code, $phone, $email, $username1, $hashedPW);
            mysqli_stmt_execute($stmt);
            mysqli_stmt_close($stmt);
            header("Location:../login.php");
           
        }
      
 
    
