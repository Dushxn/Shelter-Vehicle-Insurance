<?php
include "Header.php";
include "registrationcss.php";
include "vehicleregJS.php"

?>

<div class="background">
    
<form action="conf2.php" method="POST" name="myform2" onsubmit="return emptyCheck();">
            <div class="form" style="margin-bottom: 50px;">
            <center>
            <h1 class="payment_h1">Add payment details</h1>
            <label for="cardname" style="text-align: left;">Name on the card : </label><br>
            <input type="text" name="cardname" placeholder="ex :-John smith" id="crdname">
            <br>
            <label for="cardno"  style="text-align: left;">Card number : </label><br>
            <input type="text" name="cardno" placeholder="XXXX XXXX XXXX XXXX" id="crdno" >
            <br>
            <label for="cardtype"  style="text-align: left;">Card Type : </label><br>
            <input type="radio" name="cardtype"  required style="margin-left:20px" value="visa">Visa
            <input type="radio" name="cardtype"  required style="margin-left:20px" value="master">Master
            <input type="radio" name="cardtype"  required style="margin-left:20px" value="american-express">American express
            <br>
            <label for="carddate"  style="text-align: left;">Expiry date : </label><br>
            <input type="text" name="month" style="padding-left: 1px; padding-right:1px;  text-align:center" placeholder="month" id="mnth">
            <input type="text" name="year" style="padding-left: 1px; padding-right:1px; text-align:center" placeholder="year" id="yr">

            <br>
            <input type="checkbox" id="checkbox2" onclick="enableBTN2()" style=" top: 9px; left: 9px;width: 18px;height: 18px; margin-right:10px">Accept Payment conditions <br><br>
            <input type="submit" value="submit" name="submitbtn2" id="submitbtn2" disabled >
            </center>
            </div>
            </form>
</div>

<?php 
 include "footer.php";
 ?>