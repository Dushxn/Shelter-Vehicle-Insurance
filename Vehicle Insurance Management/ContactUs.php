<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Contact Us</title>
    </head>
    <body>
        <?php 
            include "Header.php"; 
            include 'css/ContactUsCSS.php';
            include 'ContactUsJS.php';
        ?>
        <hr>
        <div class ="background">
            <div class ="container">
            <img src ="images/imgOne.jpg" style="width:100%" style="height:50%">
            </div>
        
            <h2><center> GENERAL INQUIRY </center></h2>
            <div>
                <table align ="center">
		            <tr>
			            <td align ="left" rowspan = 2>
				        <div class="text1">
                            <div>
                            <img class="location" src ="./Images/location.png">
                            </div>

                            <div>
                            <p><b>Customer Service Center</b><br>
                                Shelter Insurance Company<br>
                                New Kandy Road,<br>
                                Malabe,<br>
                                Sri Lanka.<br></p>
                            </div>  
                        </div>
                        </td>

                        <td align ="left">
                        <div class="text1">
                            <div>
                            <img class="helpline" src ="./Images/helpline.png">
                            </div>

                            <div>
                            <p><b>Hotline</b><br>
                                0118796541</p>
                            </div>
                        </div>
                        </td>

                        <td align ="left">
                        <div class="text1">
                            <div>
                            <img class="fax" src ="./Images/fax.png">
                            </div>

                            <div>
                            <p><b>Fax</b><br>
                                0118755362</p>
                            </div>
                        </div>
                        </td>
                    </tr>

                    <tr>
                        <td align ="left" colspan = 2>
                        <div class="text1">
                            <div>
                            <img class="email" src ="./Images/email.png">
                            </div>

                            <div>
                            <p><b>Email</b><br>
                                shelterinsurance@gmail.com</p>
                            </div>
                        </div>
                        </td>
                    </tr>
                </table>
            </div>

    <h2><center>SEND AN INQUIRY</center></h2>

    
    <form action="ContactUsConnection.php" method="POST" name="myform" onsubmit="return emptyCheck();">
    <div class="form">
            <center>
            <label for="firstName">First Name</label>
            <input type="text" placeholder="First Name" style="width: 200px; height: 15px;" required name="firstName">

            <label for="lastName">Last Name</label>
            <input type="text" placeholder="Last Name" style="width: 200px; height: 15px;" required name="lastName"><br><br>

            <label for="Address" >Address  </label>
            <input type="text" placeholder="No.29 St.Anthony's Road, Periyamulla, Negombo." style="width: 615px; height: 15px;" name="address" required id="" rows="2"></textarea><br><br>

            <label for="mobile">Telephone Number</label>
            <input type="text" placeholder="07xx xxx xxx" style="width: 120px; height: 15px;"  required pattern="[0-9]{10}" required name="mobile" id="mobile" oninput="phoneCheck();">
            <p id="Vnumber" style="color: red; visibility:hidden; margin-top: -5px;">Enter a valid phone number</p>

            <label for="email">E-mail</label>
            <input type="email" placeholder="abc@gmail.com" style="width: 250px; height: 15px;" required pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}" title="ex:- abc@gmail.com" required name="email" id="email" oninput="emailCheck();">
            <p id="Vemail" style="color: red; visibility:hidden;margin-top: -5px;margin-bottom: -5px;">Enter a valid email address</p><br>

            <label for="Inquiry" >Select Inquiry Type</label>
                <select style="width: 600px; height: 30px; border-radius: 10px; border-width: 2px; border-color:black;margin-top: 10px; margin-bottom: 10px;" name="type" >
                    <option>General Inquiry</option>
                    <option>Complaint</option>
                    <option>Claim Inquiry</option>
                    <option>Sign-up Inquiry</option>
                    <option>Other</option>
                </select>
            <br><br>
        
            <div class="inputfield" ><label for="message">Message</label>
            <textarea name="message" style="width: 610px; height: 30px; border-width: 2px; border-color:black;"crequired id="" rows="3" required name="message"></textarea></div><br><br>

            <p><b>Please note that inquiries received after office hours (8:30 to 5:00), on weekends and on mercantile holidays will be followed up <br> on the next working day.</b></p><br>
            
            <input type="checkbox" id="checkbox" onclick="enableBTN()" style=" top: 9px; left: 9px;width: 18px;height: 18px; margin-right:10px">I have read and acccept the <b>Data Privacy Guidelines</b> <br><br>
            <center>
            <input type="submit" value="Submit" name="submitbtn" id="submitbtn" disabled >
            </center>
            </div>
        </form>
        <?php include "Footer.php" ?>
    </body>
</html>