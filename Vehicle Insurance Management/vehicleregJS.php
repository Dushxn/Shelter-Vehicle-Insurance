<script>
    function enableBTN1()
        {
            if(document.getElementById("checkbox1").checked )
	    {
		    document.getElementById("submitbtn1").disabled=false;
	    }else
	    {
		    document.getElementById("submitbtn1").disabled=true;
	    }
        }
		function enableBTN2()
        {
            if(document.getElementById("checkbox2").checked )
	    {
		    document.getElementById("submitbtn2").disabled=false;
	    }else
	    {
		    document.getElementById("submitbtn2").disabled=true;
	    }
        }




	function displayAmount()
	{
		if(document.getElementById("premium").checked)
		{
			document.getElementById("pckg").innerHTML = "Premium package";
			document.getElementById("amnt").innerHTML = "price : rs.55000.00";
		}else if(document.getElementById("normal").checked)
		{
			document.getElementById("pckg").innerHTML = "Normal package";
			document.getElementById("amnt").innerHTML = "price : rs.45000.00";
		}else if(document.getElementById("thirdparty").checked)
		{
			document.getElementById("pckg").innerHTML = "Third-party package";
			document.getElementById("amnt").innerHTML = "price : rs.35000.00";
		}
		
	}

	function emptyCheck()
        {
            let Cname = document.getElementById("crdname");
            let Cno = document.getElementById("crdno");
            let month = document.getElementById("mnth");
            let year = document.getElementById("yr");


            if(Cname.value.trim() == "" || Cno.value.trim() == ""||month.value.trim() == ""||year.value.trim() == "")
            {
                alert("no empty spaces allowed !");
                return false;
            }
           
        }

		function yearCheck()
		{
			let year = document.getElementById("Myear").value;
			let regx = /^[0-9]{4}$/
			if(regx.test(year))
			{
				document.getElementById("Vyear").style.visibility = "hidden";
                document.getElementById("submitbtn1").disabled=false;
                return true;
			}else
			{
				document.getElementById("Vyear").style.visibility = "visible";
                document.getElementById("submitbtn1").disabled=true;
                return false;
			}
		}
</script>