<script>
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
            let mobile = document.getElementById("mobile").value;
            let regx = /^[0][0-9]{9}$/;
            if(regx.test(mobile))
            {
                document.getElementById("Vnumber").style.visibility = "hidden";
                document.getElementById("submitbtn").disabled=false;
                return true;
            }else
            {
                document.getElementById("Vnumber").style.visibility = "visible";
                document.getElementById("submitbtn").disabled=true;
                return false;
            }
        }

    function emailCheck()
        {
            let  email = document.getElementById("email").value;
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
</script>