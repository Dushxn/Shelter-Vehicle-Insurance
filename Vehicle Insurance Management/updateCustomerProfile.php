<?php
session_start();

if (!isset($_SESSION['usersid'])) {
    header("Location:login.php");
    exit();
}
include 'configure/connection.php';


$id = $_GET['editid'];
$sql = "select * from user_details WHERE `username` = '" . $_SESSION['username'] . "'";
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_assoc($result);


$ID = $row['ID'];
$fname = $row['first_name'];
$lname = $row['last_name'];
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



if (isset($_POST['submit'])) {
    $street_address_1 = $_POST['street_address_1'];
    $street_address_2 = $_POST['street_address_2'];
    $city = $_POST['city'];
    $province = $_POST['province'];
    $postel_code = $_POST['postel_code'];
    $mobile = $_POST['mobile'];
    $email = $_POST['email'];



    $sql = "update user_details set 
                    ID=$id,
                    street_address_1='$street_address_1',
                    street_address_2='$street_address_2',
                    city='$city',
                    province='$province',
                    postal_code='$postel_code',
                    mobile='$mobile',
                    email='$email'
                    where ID=$ID";



    $result = mysqli_query($conn, $sql);

    if ($result) {
        //echo "Updated successfully";
        header('location:customerprof.php');
    } else {
        echo "ERROR!!";
        //die(mysqli_error($con));
    }
}
include "loginheadercustomer.php";
include "css\updateCustomerProfilecss.php";

?>
<div class="background">
    <form method="POST" name="myform" target="_blank">
        <div class="form">
            <center>
                <h1 class="frm">Edit Profile </h1>

                <div class="my_form">

                    <label>Name : </label>
                    <input name="first_name" placeholder="First Name" type="text" autocomplete="off" readonly="readonly" value=<?php echo $fname; ?>>
                    <input name="last_name" placeholder="Last Name" type="text" class="lname" autocomplete="off" readonly="readonly" value=<?php echo $lname; ?>>
                    <br>
                    <label>Date of Birth : </label>
                    <input type="date" name="dob" autocomplete="off" readonly="readonly" value=<?php echo $dob; ?>>
                    <br>
                    <label>Address : </label>
                    <input name="street_address_1" placeholder="Street Address" type="text" autocomplete="off" value=<?php echo $street_1; ?>>
                    <input name="street_address_2" placeholder="Street Address line 2" type="text" autocomplete="off" value=<?php echo $street_2; ?>>
                    <input name="city" placeholder="City" type="text" autocomplete="off" value=<?php echo $city; ?>>
                    <input name="province" placeholder="Province" type="text" autocomplete="off" value=<?php echo $province; ?>>
                    <input name="postel_code" placeholder="Postal Code" type="text" autocomplete="off" value=<?php echo $zip_code; ?>>
                    <br><br>
                    <label> Gender&nbsp;&nbsp;:&nbsp;&nbsp; <?php echo $gender; ?></label>


                    <br><br>

                    <label for="nic">NIC No : </label>
                    <input type="text" placeholder="2002#######v" name="NIC" id="NIC" autocomplete="off" readonly="readonly" value=<?php echo $nic; ?> required>
                    <br>
                    <label for="phone">Mobile : </label>
                    <input type="text" placeholder="+94#########" name="mobile" id="phone" oninput="phoneCheck();" autocomplete="off" value=<?php echo $phone; ?> required>
                    <p id="Pnumber" style="color: red; visibility:hidden;">Enter a valid phone number</p>

                    <label for="Email">Email : </label>
                    <input type="email" placeholder="abc@gmail.com" name="email" id="Email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$" title="ex:- abc@gmail.com" oninput="emailCheck();" autocomplete="off" value=<?php echo $email; ?> required>
                    <p id="Vemail" style="color: red; visibility:hidden;">Enter a valid email address</p>
                    <label for="username">Username : </label><br>
                    <input type="text" name="username" placeholder="Username" autocomplete="off" readonly="readonly" value=<?php echo $username1; ?> required disabled>
                    <br><br>
                    <div>
                        <a href="customerprof.php"><input type="button" class="btn button1" value="Cancel"></input></a>
                        <input type="submit" class="btn button2" name="submit"></input>
                    </div>
                </div>
            </center>
            <br><br>


        </div>
    </form>
</div>

<?php
include "Footer.php";
?>
<script>
    function emailCheck() {
        let email = document.getElementById("Email").value;
        let regx = /[a-zA-Z0-9 _ \-]+[@][a-z]+[\.][a-z]{2,3}$/;
        if (regx.test(email)) {
            document.getElementById("Vemail").style.visibility = "hidden";
            document.getElementById("submitbtn").disabled = false;
            return true;
        } else {
            document.getElementById("Vemail").style.visibility = "visible";
            document.getElementById("submitbtn").disabled = true;
            return true;
        }
    }

    function phoneCheck() {
        let phone = document.getElementById("phone").value;
        let regx = /^[0][0-9]{9}$/;
        if (regx.test(phone)) {
            document.getElementById("Pnumber").style.visibility = "hidden";
            document.getElementById("submitbtn").disabled = false;
            return true;
        } else {
            document.getElementById("Pnumber").style.visibility = "visible";
            document.getElementById("submitbtn").disabled = true;
            return false;
        }
    }
</script>