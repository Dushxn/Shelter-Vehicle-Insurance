<?php
session_start();
include 'configure/connection.php';

if (!isset($_SESSION['usersid'])) {
    header("Location:login.php");
    exit();
}

?>
<?php

include "css/customerprofcss.php";
include "loginheadercustomer.php";
?>
<div class="background">
<h2>WELCOME To Your Profile, <?php echo $_SESSION['fname'] . " " . $_SESSION['lname'] ?>.</h2><br>


<?php
$id = $_SESSION['username'];
$sql = "select * from user_details WHERE `username` = '" . $_SESSION['username'] . "'";
$result = mysqli_query($conn, $sql);
if ($result) {
    while ($row = mysqli_fetch_assoc($result)) {
        $id = $row['ID'];
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


        echo '
        <table class="cus_table">
        <tr><td>Customer ID &nbsp;</td><td> '  . $id . '</td></tr>
        <tr><td>Name</td><td>' . $fname . ' ' . $lname . '</td></tr>
        <tr><td>DOB</td><td>' . $dob . '</td></tr>
        <tr><td>NIC</td><td>' . $nic . '</td></tr>
        <tr><td>Gender</td><td>' . $gender . '</td></tr>
        <tr><td>Address</td><td>' . $street_1 . ' ' . $street_2 . ' ' . $city . ' ' . $province . ' ' . $zip_code . '</td></tr>
        <tr><td>Phone No</td><td>' . $phone . '</td></tr>
        <tr><td>Email</td><td>' . $email . '</td></tr>
        <tr><td>Username</td><td>' . $username1 . '</td></tr>
        </table>
        <br><br>

        <a href="updateCustomerProfile.php? editid=' . $id . '"><button class="btn_edit btn">Edit Profile</button></a>
          
          ';
          
    }
}
?>


<table class="btn_table"> 
<tr>
    <td class="btn_td"><a href="displayCus.php"><button class="btn btn_profile">View Policies</button></a></td>
    <td class="btn_td"><a href="f1update.php"><button class="btn btn_profile">View Vehicle</button></a></td>
    <td class="btn_td"><a href="claimform.php"><button class="btn btn_profile">Request Claim</button></a></td>
</tr>
</table>
</div>
</body>

<!--<a href="configure/customerlogout.php"> <button>logout</button></a>-->


<?php
include "Footer.php";
?>