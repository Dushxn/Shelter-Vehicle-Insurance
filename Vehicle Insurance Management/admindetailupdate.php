<?php
session_start();
if(!isset($_SESSION['username']))
    {
        header("Location:login.php");
        exit();
    }
?>


<?php


include 'configure/connection.php';
$username = $_SESSION['username'];
$sql="select * from user_details WHERE `username` = '".$_SESSION['username']."'";
$result=mysqli_query($conn,$sql);
$row=mysqli_fetch_assoc($result);
$ID=$row['ID'];
$fname=$row['first_name'];
$lname=$row['last_name'];
$dob = $row['dob'];
$nic = $row['NIC'];
$gender = $row['gender'];
$street_1 = $row['street_address_1'];
$street_2 = $row['street_address_2'];
$city = $row['city'];
$province = $row['province'];
$zip_code = $row['postal_code'];
$phone = $row['mobile'];
$email = $row['email'];
$username1 = $row['username'];
$passwordnew = $row['password'];



if(isset($_POST['submitbtn'])){



    $street_address_1 = $_POST['street1'];
    $street_address_2 = $_POST['street2'];
    $city = $_POST['city'];
    $province = $_POST['province'];
    $postel_code = $_POST['zipcode'];
    $mobile = $_POST['phone'];
    $email = $_POST['Email'];




    $sql="update user_details set 
                    ID=$ID, 
                    street_address_1='$street_address_1',
                    street_address_2='$street_address_2',
                    city='$city',
                    province='$province',
                    postal_code='$postel_code',
                    mobile='$mobile',
                    email='$email'
                    where username='$username'  ";

                    $result=mysqli_query($conn,$sql);
   if($result){
       //echo "Updated successfully";
       header('location:adminprof.php');
       
   }
   else{
       echo "ERROR!!";
       //die(mysqli_error($con));
   }
                    

   }
   
   
   include 'css/registrationcss.php';
include 'registrationjs.php';
   include 'loginheader.php';
?>

<div class="background">
        <form action="admindetailupdate.php" method="POST" name="myform"  target="_blank">
            <div class="form">
            <center>
            <h1 class="frm">update details </h1>
            <label>Name : </label> <br>
            <input name="fName" autocomplete="off" placeholder="First Name" type="text" value=<?php echo $fname  ?>  disabled>
            <input name="lName" autocomplete="off"  placeholder="Last Name" type="text" class="Perera" value=<?php  echo $lname  ?> disabled>
            <br><br><br>
            <label>Date of birth : </label><br>
            <input type="date" name="dob" value=<?php echo $dob  ?> disabled>
            <br><br><br>
            <label>Address </label> <br>
            <input name="street1" placeholder="Street Address" type="text" value=<?php echo $street_1  ?>>
            <br>
            <input name="street2"  placeholder="Street Address line 2" type="text" value=<?php echo $street_2?>>
            <br>
            <input name="city" placeholder="City" type="text" value=<?php echo $city  ?>>
            <input name="province" placeholder="Province" type="text" value=<?php echo $province  ?>>
            <br>
            <input name="zipcode" placeholder="Postal Code" type="text" value=<?php echo $zip_code  ?>>
            <br><br><br>
            <label> Gender: <?php echo $gender; ?></label>
            <br><br><br>
            <label for="nic">NIC no : </label><br>
            <input type="text"  placeholder="2002#######v" name="nic" id="NIC" oninput="nicCheck();" value=<?php echo $nic  ?> required disabled>
            <p id="Vnic" style="color: red; visibility:hidden;">Enter a valid NIC number</p>
            <br>
            <label for="phone">Mobile : </label><br>
            <input type="text"  placeholder="+94#########" name="phone" id="phone" oninput="phoneCheck();" value=<?php echo $phone  ?> required>
            <p id="Pnumber" style="color: red; visibility:hidden;">Enter a valid phone number</p>
            <br>
            <label for="Email">Email : </label><br>
            <input type="email" placeholder="abc@gmail.com" name="Email" id="Email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$" value=<?php echo $email  ?> title="ex:- abc@gmail.com" oninput="emailCheck();" required>
            <p id="Vemail" style="color: red; visibility:hidden;">Enter a valid email address</p>
            
            <label for="username">Username : </label><br>
            <input type="text" name="username" placeholder="Username" oninput="usernameCheck()" value=<?php echo $username1  ?> required disabled>
            
            <br><br><br>
            <label for="password">Password : </label><br>
            <input type="password" placeholder="**************"  name="password" id="password" value=<?php echo $passwordnew ?> disabled pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters"  required>
            <p id="password" style="color: red; visibility:hidden;">Enter a valid password</p>
            <br>
            <label for="confrmpassword">Confirm Password : </label><br>
            <input type="password" name="confrmpassword" placeholder="***********" value=<?php echo $passwordnew  ?> disabled pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" id="cpw" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters" oninput="passwordcheck()" required>
            <p id="confirmpassword" style="color: red; visibility:hidden;">Password does not match</p>
           <br>
            <?php
                if(isset($_GET["error"] ))
                {
                    if($_GET["error"] ==  "UsernameExist")
                    {
                       echo ' <p id="Vusername" style="color: red; " >Username already taken</p> ';
                    }
                }
            ?>

           <input type="submit" value="submit" name="submitbtn" id="submitbtn" oneclick="window.location.href = 'https://localhost/IWT/vehiclereg.php'">
            </center>

            

            </div>
        </form>
