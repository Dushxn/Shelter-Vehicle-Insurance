<?php 
    include 'Header.php';
    include 'css/registrationcss.php';
    include 'registrationjs.php';
?>
    
    <div class="background">
        <form action="configure/register.inc.php" method="POST" name="myform"  target="_blank">
            <div class="form">
            <center>
            <h1 class="frm">Registration Form </h1>
            <label>Name : </label> <br>
            <input name="FName" placeholder="First Name" type="text">
            <input name="LName"  placeholder="Last Name" type="text" class="lname">
            <br><br><br>
            <label>Date of birth : </label><br>
            <input type="date" name="dob" >
            <br><br><br>
            <label>Address </label> <br>
            <input name="street1" placeholder="Street Address" type="text">
            <br>
            <input name="street2"  placeholder="Street Address line 2" type="text">
            <br>
            <input name="city" placeholder="City" type="text">
            <input name="province" placeholder="Province" type="text">
            <br>
            <input name="zipcode" placeholder="Postal Code" type="text">
            <br><br><br>
            <label for="gender">Gender : </label><br>
            <input type="radio" name="Gender" style="top: 9px; left: 9px;width: 18px;height: 18px;" value="male">Male 
            <input type="radio" name="Gender" style="top: 9px; left: 9px;width: 18px;height: 18px;" value="female">Female 
            <br><br><br>
            <label for="nic">NIC no : </label><br>
            <input type="text"  placeholder="2002#######v" name="nic" id="NIC" oninput="nicCheck();" required>
            <p id="Vnic" style="color: red; visibility:hidden;">Enter a valid NIC number</p>
            <br>
            <label for="phone">Mobile : </label><br>
            <input type="text"  placeholder="+94#########" name="phone" id="phone" oninput="phoneCheck();" required>
            <p id="Pnumber" style="color: red; visibility:hidden;">Enter a valid phone number</p>
            <br>
            <label for="Email">Email : </label><br>
            <input type="email" placeholder="abc@gmail.com" name="Email" id="Email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$" title="ex:- abc@gmail.com" oninput="emailCheck();" required>
            <p id="Vemail" style="color: red; visibility:hidden;">Enter a valid email address</p>
            
            <label for="username">Username : </label><br>
            <input type="text" name="username" placeholder="Username" oninput="usernameCheck()" required>
            
            <br><br><br>
            <label for="password">Password : </label><br>
            <input type="password" placeholder="**************"  name="password" id="password" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters"  required>
            <p id="password" style="color: red; visibility:hidden;">Enter a valid password</p>
            <br>
            <label for="confrmpassword">Confirm Password : </label><br>
            <input type="password" name="confrmpassword" placeholder="***********" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" id="cpw" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters" oninput="passwordcheck()" required>
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

        </div>

    


<?php 
    include 'Footer.php';
?>