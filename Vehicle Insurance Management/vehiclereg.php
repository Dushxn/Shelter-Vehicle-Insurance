<?php
include "Header.php";
include "registrationcss.php";
include "vehicleregJS.php"

?>

<div class="background">
        <form action="/configure/conf2.php" method="POST" name="myform1" onsubmit="">
            <div class="form" style="margin-bottom: 50px;">
            <center>
            <h1 class="payment_h1">Add vehicle details</h1>
            <label for="model">Vehicle Model : </label><br>
            <input type="text" placeholder="honda...."  name="model" required>
            <br>
            <label for="manufacture">Year of manufacture : </label><br>
            <input type="text"  name="manufacture" placeholder="yyyy" id="Myear" oninput="yearCheck();">
            <p id="Vyear" style="color: red; visibility:hidden;">Enter a valid manufacture Year</p>

            <label for="License">License plate : </label><br>
            <input type="text"  name="License" placeholder="abc####">
            <br><br>
            <label for="insurance">Insurance type : </label><br>
            <input type="radio"  name="type" style="top: 9px; left: 9px;width: 18px;height: 18px;" value="Premium" id="premium" onclick="displayAmount();"> Premium <br>
            <input type="radio"  name="type" style="top: 9px; left: 9px;width: 18px;height: 18px;" value="Normal" id="normal" onclick="displayAmount();"> Normal <br>
            <input type="radio"  name="type" style="top: 9px; left: 9px;width: 18px;height: 18px;" value="Third-party" id="thirdparty" onclick="displayAmount();"> Third party 
            <br><br>
            <label for="chassis">chassis number : </label><br>
            <input type="text"  name="chassis" placeholder="#########">
            <br>
            <h1 id="pckg"></h1>
            <p id="amnt"><br>    
            </p>
          
            <input type="checkbox" id="checkbox1" onclick="enableBTN1()" style=" top: 9px; left: 9px;width: 18px;height: 18px; margin-right:10px">Accept Privacy policy and Terms <br><br>
            <input type="submit" value="confirm" name="submitbtn1" id="submitbtn1" disabled >
            </div>  
            </center>
        </form>

<?php
    include "Footer.php";
?>