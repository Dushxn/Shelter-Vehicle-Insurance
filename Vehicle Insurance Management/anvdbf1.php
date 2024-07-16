<?php
include 'anvdbcon.php';
if(isset($_POST['upload'])){
  $First_name=$_POST['First_name'];
  $Last_name=$_POST['Last_name'];
  $Vehicle_model=$_POST['Vehicle_model'];
  $Manufacture_year=$_POST['Manufacture_year'];
  $License_plate=$_POST['License_plate'];
  $Insurance_type=$_POST['Insurance_type'];
  

  $sql="insert into `addnew` (First_name,Last_name,Vehicle_model,Manufacture_year,License_plate,Insurance_type)
  values('$First_name','$Last_name','$Vehicle_model','$Manufacture_year','$License_plate','$Insurance_type')";
  
  $result = mysqli_query($con, $sql);

  if($result){
    echo "";
  }else{
    die(mysqli_error($con));
  }
}
?>
