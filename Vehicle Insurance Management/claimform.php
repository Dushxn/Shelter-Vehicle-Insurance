<?php
session_start();
if (!isset($_SESSION['usersid'])) {
    header("Location:login.php");
    exit();
}
include 'configure/connection.php';

if (isset($_POST['submit'])) {
    $VID = $_POST['VID'];
    $plateNo = $_POST['plateNo'];
    $datetime = $_POST['datetime'];
    $location = $_POST['location'];
    $details1 = $_POST['details1'];
    $details2 = $_POST['details2'];

    $sql = "insert into claimform (
        VID,
        Plate_Number,
        Date_Time,
        Location,
        Description_accident,
        Description_damage)
    values('$VID','$plateNo','$datetime','$location','$details1','$details2')";


    $result = mysqli_query($conn, $sql);

    if ($result) {
        //echo "Data inserted successfully";
        header('location:customerprof.php');
    } else {
        echo "ERROR!!";
        //die(mysqli_error($con));
    }
}
include 'loginheadercustomer.php';
include 'css/claimformcss.php';
?>
<script>
    function vidCheck() {
        let phone = document.getElementById("VID").value;
        let regx = /^[0-9]{4}$/;
        if (regx.test(phone)) {
            document.getElementById("vid").style.visibility = "hidden";
            document.getElementById("submit").disabled = false;
            return true;
        } else {
            document.getElementById("vid").style.visibility = "visible";
            document.getElementById("submit").disabled = true;
            return false;
        }
    }
</script>


<div class="background">
    <form method="post" name="claimForm">
        <div class="form">
            <center>
                <h1 class="frm">Request Claim</h1>
                <div class="my_form">

                    <label>Vehicle Identification Number: </label>
                    <input name="VID" id="VID" placeholder="4 digit number" type="text" oninput="vidCheck();">
                    <p id="vid" style="color: red; visibility:hidden;">Enter a valid vehicle id no</p>
                    

                    <label>License Plate Number: </label>
                    <input name="plateNo" placeholder="12345678" type="text">
                    <br>

                    <label>Date and Time of the accident: </label>
                    <input name="datetime" type="datetime-local">
                    <br>

                    <label>Location of accident: </label>
                    <input name="location" type="text" required>
                    <br>

                    <label>Description of the accident: </label>
                    <textarea name="details1" type="text" cols="20" rows="4"></textarea>
                    <br>

                    <label>Description of the damage vehicle:<br>
                        Description of property damage(if applicable)</label>
                    <textarea name="details2" type="text" cols="20" rows="4"></textarea>
                    <br>

                    <br><br>
                    <div>
                        <a href="customerprof.php"><input type="button" class="btn button1" value="Cancel"></input></a>
                        <input type="submit" class="btn button2" value="Submit" name="submit" id="submitbtn">
                    </div>
                </div>
            </center>



    </form>
    <br>
</div>
<br><br>





<?php
include 'Footer.php';
?>

