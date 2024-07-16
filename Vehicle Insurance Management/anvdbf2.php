<?php
include 'anvdbcon.php';
if(isset($_POST['paynow'])){
    $First_name=$_POST['First_name'];
    $Last_name=$_POST['Last_name'];
  $Card_no = $_POST['Card_no'];
  $Card_type = $_POST['Card_type'];
  $Expiry_date = $_POST['Expiry_date'];
  $Pin_no =  $_POST['Pin_no'];
  $Amount =  $_POST['Amount'];
  

  $sql="insert into `pay` (First_name,Last_name,Card_no,Card_type,Expiry_date,Pin_no,Amount)
  values('$First_name','$Last_name','$Card_no','$Card_type','$Expiry_date','$Pin_no','$Amount')";
  
  $result1 = mysqli_query($con, $sql);

  if($result1){
    echo "";
  }else{
    die(mysqli_error($con));
  }
}
?>