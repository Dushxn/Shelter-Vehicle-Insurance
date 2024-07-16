
<?php 
session_start();
if (!isset($_SESSION['usersid'])) {
    header("Location:login.php");
    exit();
}
include 'anvdbf1.php';
include 'anvdbf2.php';
?>


<?php
include 'loginheadercustomer.php';
include 'anvcss.php';


?>



    <div class="container my-5">
    
<div class="background">
    <img src="https://magnuminsurance.com/wp-content/uploads/2021/11/banner-auto-insurance.jpg" style="width:100%; height:50%;">
        <form  method="post" name="myform1" onsubmit="addnewvehicle">
            <div class="form1">
                <center>
                <h1 class="heading">Add New Vehicle Form</h1>
                <label>Vehicle Owner :</label> <br>
                <input type="text" placeholder="First Name" id="vehicleownerF" name="First_name" autocomplete="off">
                <input type="text" placeholder="Last Name" id="vehicleownerL" name="Last_name" class="vehicleownerL"autocomplete="off">
            <br>
            <label>Vehicle Model :</label> <br>
                <input type="text" placeholder="Vehicle Model" id="vehiclemodel" name="Vehicle_model" autocomplete="off">
                

                <br>
                <label>Manufacture Year :</label> <br>
                <input type="text" placeholder="YYYY" id="myear" name="Manufacture_year" autocomplete="off">
                <br>

                <label>License Plate : </label> <br>
                <input type="text" placeholder="ABC-XXXX" id="lplate" name="License_plate" autocomplete="off">
                <br>

                <label>Insurance Type : </label> <br>
                <input type="radio"  name="Insurance_type" style="top: 9px; left: 9px;width: 18px;height: 18px; margin-left: 11px;" value="Premium"autocomplete="off" > Premium <br>
                <input type="radio"  name="Insurance_type" style="top: 9px; left: 9px;width: 18px;height: 18px; margin-left: 0px;" value="Normal"autocomplete="off"> Normal <br>
                <input type="radio"  name="Insurance_type" style="top: 9px; left: 9px;width: 18px;height: 18px; margin-left: 25px;" value="Third-party"autocomplete="off"> Third party 
                <br>
                <button type="submit"  value="Upload" name="upload" id="upload"  >upload</button>

                
</center>
</div>
</form>
                <hr class="hr1">

                <div class="container my-5">
    
<div class="background">

                <form method="post" name="myform2" onsubmit="pay">
                <div class="form2">
                    <center>

                <h2 class="heading1">PAYMENT</h2>

                <label>Card Holder Name : </label> <br>
                <input type="text" placeholder="First Name" id="vehicleownerF" name="First_name" autocomplete="off">
                <input type="text" placeholder="Last Name" id="vehicleownerL" name="Last_name" class="vehicleownerL"autocomplete="off">
                <br>

                <label>Card No : </label> <br>
                <input type="text" placeholder="XXXX-XXXX-XXXX-XXXX" id="cno" name="Card_no" autocomplete="off">
                <br>

                <label>Card Type : </label> <br>
                <input type="radio"  name="Card_type" style="top: 9px; left: 9px;width: 18px;height: 18px;" value="visa" autocomplete="off"> Visa
                <input type="radio"  name="Card_type" style="top: 9px; left: 9px;width: 18px;height: 18px;" value="master" autocomplete="off"> Master 
                <input type="radio"  name="Card_type" style="top: 9px; left: 9px;width: 18px;height: 18px;" value="aexpress" autocomplete="off"> American Express
                <input type="radio"  name="Card_type" style="top: 9px; left: 9px;width: 18px;height: 18px;" value="paypal" autocomplete="off"> Paypal <br>
                <br>

                <label>Expiry Date : </label> <br>
                <input type="date" placeholder="Expiry Date" id="edate"  name="Expiry_date" autocomplete="off">
                <br>
                <label>Pin No : </label> <br>
                <input type="text" placeholder="XXX" id="pin"  name="Pin_no" autocomplete="off">
                <br>

                <label>Amount : </label> <br>
                <input type="text" placeholder="100,000/=" id="amount"  name="Amount" autocomplete="off">
                <br>

                

                <button type="submit"  value="pay" name="paynow" id="pay">PAY</button>
                 

                </center>
            </div>



</form>

<?php
include 'Footer.php';
?>