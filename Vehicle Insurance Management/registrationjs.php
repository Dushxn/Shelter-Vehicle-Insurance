<?php 
    include "configure/fuctions.inc.php";
?>

<script>
        function passwordcheck()
        {
            let password = document.getElementById("password");
            let cnfrmpassword = document.getElementById("cpw");
            if(password.value != cnfrmpassword.value )
            {
                document.getElementById("confirmpassword").style.visibility = "visible";
                document.getElementById("submitbtn").disabled=true;
                return false;
            }else
            {
                document.getElementById("confirmpassword").style.visibility = "hidden";
                document.getElementById("submitbtn").disabled=false;
                return true;
            }
        }

  
        function enableBTN()
        {
            if(document.getElementById("checkbox").checked)
	    {
		    document.getElementById("submitbtn").disabled=false;
	    }else
	    {
		    document.getElementById("submitbtn").disabled=true;
	    }
        }

        function  phoneCheck()
        {
            let phone = document.getElementById("phone").value;
            let regx = /^[0][0-9]{9}$/;
            if(regx.test(phone))
            {
                document.getElementById("Pnumber").style.visibility = "hidden";
                document.getElementById("submitbtn").disabled=false;
                return true;
            }else
            {
                document.getElementById("Pnumber").style.visibility = "visible";
                document.getElementById("submitbtn").disabled=true;
                return false;
            }
        }

        function emailCheck()
        {
            let  email = document.getElementById("Email").value;
            let regx = /[a-zA-Z0-9 _ \-]+[@][a-z]+[\.][a-z]{2,3}$/;
            if(regx.test(email))
            {
                document.getElementById("Vemail").style.visibility = "hidden";
                document.getElementById("submitbtn").disabled=false;
                return true;
            }else
            {
                document.getElementById("Vemail").style.visibility = "visible";
                document.getElementById("submitbtn").disabled=true;
                return true;
            }
        }

        function nicCheck()
        {
            let nic = document.getElementById("NIC").value;
            let regx = /^[0-9]{9}[a-zA-Z]{1}$/;
            let regx1 = /^[0-9]{12}$/;
            if(regx.test(nic) || regx1.test(nic))
            {
                document.getElementById("Vnic").style.visibility = "hidden";
                document.getElementById("submitbtn").disabled=false;
                return true;
            }else
            {
                document.getElementById("Vnic").style.visibility = "visible";
                document.getElementById("submitbtn").disabled=true;
                return true;
            }
        }

        function enableBTN()
        {
            if(document.getElementById("checkbox").checked )
	    {
		    document.getElementById("submitbtn").disabled=false;
	    }else
	    {
		    document.getElementById("submitbtn").disabled=true;
	    }
        }
       
    </script>