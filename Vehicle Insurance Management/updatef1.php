
<?php 
session_start();
if (!isset($_SESSION['usersid'])) {
    header("Location:login.php");
    exit();
}
include 'anvdbcon.php';

$ID=$_GET['updateid'];
$sql="Select * from `addnew` where id=$ID";
$result=mysqli_query($con,$sql);
$row=mysqli_fetch_assoc($result);
  $First_name=$row['First_name'];
  $Last_name=$row['Last_name'];
  $Vehicle_model=$row['Vehicle_model'];
  $Manufacture_year=$row['Manufacture_year'];
  $License_plate=$row['License_plate'];
  $Insurance_type=$row['Insurance_type'];

if(isset($_POST['upload'])){
  $First_name=$_POST['First_name'];
  $Last_name=$_POST['Last_name'];
  $Vehicle_model=$_POST['Vehicle_model'];
  $Manufacture_year=$_POST['Manufacture_year'];
  $License_plate=$_POST['License_plate'];
  $Insurance_type=$_POST['Insurance_type'];
  

  $sql="update addnew set id=$ID,
   First_name='$First_name',
  Last_name='$Last_name',
  Vehicle_model='$Vehicle_model',
  Manufacture_year='$Manufacture_year',
  License_plate='$License_plate',
  Insurance_type='$Insurance_type'
  where id=$ID";
  
  $result = mysqli_query($con, $sql);

  if($result){
    header("Location:f1update.php");
  }else{
    die(mysqli_error($con));
  }
}

?>


<?php
include 'loginheadercustomer.php';
include 'anvcss.php';


?>

    <div class="container my-5">
    
<div class="background">
        <form  method="post" name="myform1" onsubmit="addnewvehicle">
            <div class="form1">
                <center>
                <h1 class="heading">Add New Vehicle Form</h1>
                <label>Vehicle Owner :</label> <br>
                <input type="text" placeholder="First Name" id="vehicleownerF" name="First_name" autocomplete="off" 
                 value=<?php echo $First_name?>>
                <input type="text" placeholder="Last Name" id="vehicleownerL" name="Last_name" class="vehicleownerL"autocomplete="off"
                value=<?php echo $Last_name?>>
            <br>
            <label>Vehicle Model :</label> <br>
                <input type="text" placeholder="Vehicle Model" id="vehiclemodel" name="Vehicle_model" autocomplete="off"
                value=<?php echo $Vehicle_model?>>
                

                <br>
                <label>Manufacture Year :</label> <br>
                <input type="text" placeholder="YYYY" id="myear" name="Manufacture_year" autocomplete="off"
                value=<?php echo $Manufacture_year?>>
                <br>

                <label>License Plate : </label> <br>
                <input type="text" placeholder="ABC-XXXX" id="lplate" name="License_plate" autocomplete="off"
                value=<?php echo $License_plate?>>
                <br>

                <label>Insurance Type : </label> <br>
                <input type="radio"  name="Insurance_type" style="top: 9px; left: 9px;width: 18px;height: 18px; margin-left: 11px;" value="Premium"autocomplete="off"
                value=<?php echo $Insurance_type?> > Premium <br>
                <input type="radio"  name="Insurance_type" style="top: 9px; left: 9px;width: 18px;height: 18px; margin-left: 0px;" value="Normal"autocomplete="off"
                value=<?php echo $Insurance_type?>> Normal <br>
                <input type="radio"  name="Insurance_type" style="top: 9px; left: 9px;width: 18px;height: 18px; margin-left: 25px;" value="Third-party"autocomplete="off"
                value=<?php echo $Insurance_type?>> Third party 
                <br>
                <button type="submit" class="btn btn-primary" value="Upload" name="upload" id="upload"  >UPDATE</button>
                
</center>
</div>
</form>
                

<?php
include 'Footer.php';
?>