<?php 
    session_start();
    include "loginheader.php";
    if(!isset($_SESSION['username']))
    {
        header("Location:login.php");
        exit();
    }
    include "css/adminprofcss.php";
?>
    <?php
include 'connection.php';

    ?>

      <h3 class="heading">welcome <?php echo $_SESSION['fname']." ".$_SESSION['lname'] ?></h3>
   

            
    <div class="container">
        <div class="background">
    <?php
    $id = $_SESSION['username'];
    $sql="select * from user_details WHERE `username` = '".$_SESSION['username']."'";
    $result=mysqli_query($con,$sql);
    if($result){
      while($row=mysqli_fetch_assoc($result)){
          $id=$row['ID'];
          $fname=$row['first_name'];
          $lname=$row['last_name'];
          $dob = $row['dob'];
          $nic = $row['NIC'];
          $gender = $row['gender'];
          $street_1 = $row['street_address_1'];
          $street_2 = $row['street_address_2'];
          $city = $row['city'];
          $province = $row['province'];
          $zip_code = $row['postal_code'];
          $phone = $row['mobile'];
          $email = $row['email'];
          $username1 = $row['username'];
          $passwordnew = $row['password'];


          echo '
          <h3 class="ud" style="text-decoration:underline">User Details</h3>
          <h3 class="ud">Admin ID: '.$id.'</h3>
          <h3 class="ud">Name: '.$fname.' '.$lname.'</h3>
          <h3 class="ud">DOB: '.$dob.'</h3>
          <h3 class="ud">NIC: '.$nic.'</h3>
          <h3 class="ud">Gender: '.$gender.'</h3>
          <h3 class="ud">Address: '.$street_1.' '.$street_2.' '.$city.' '.$province.' '.$zip_code.'</h3>
          <h3 class="ud">Phone no:'.$phone.'</h3>
          <h3 class="ud">Email:'.$email.'</h3>
          <h3 class="ud">username:'.$username1.'</h3>
          <button class="edit"><a href="admindetailupdate.php?editid='.$id.'" style="text-decoration:none">Edit</a></button><br><br><br>
          ';
      }
  }
  
    ?>
        </div>

    </div>
<!--<button><a href="">View Policies</a></button><br>
<button><a href="">veiw vehicle</a></button><br>
<button><a href="">Request claim</a></button><br> -->

  </tbody>
</table>

  <div class="container" id="block1" style="margin-bottom: 40px;">
   
    <h1>Manage policies</h1>
    <p>View / add or remove agent and customer policies</p>
    <center><button class="edit"><a href="display.php" style="text-decoration:none">customer policies</a></button>
    <button class="edit"><a href="AgentPolicyDisplay.php" style="text-decoration:none">agent policies</a></button></center>
  </div>

  <div class="container" id="block1" style="margin-bottom: 40px;">
   
   <h1>Manage Claims</h1>
   <p>validation of claims</p>
   <center><button class="edit"><a href="displayclaimform.php" style="text-decoration:none">View</a></button></center>
 </div>

 <div class="container" id="block1">
   
   <h1>Feedbacks and inquiries</h1>
   <p>manage user feedback and inquiries</p>
   <center><button class="edit"><a href="ContactUsDisplay.php" style="text-decoration:none">View</a></button></center>
 </div>
<div class="clear"></div>
 <div class="container" id="block2" style="margin-bottom: 100px;">
   
   <h1>Manage customers</h1>
   <?php
    $role = $_SESSION['role'];
    $sql="select * from user_details WHERE `role` != 'admin'";
    $result=mysqli_query($con,$sql);
    if($result){
      while($row=mysqli_fetch_assoc($result)){
          $id=$row['ID'];
          $fname=$row['first_name'];
          $lname=$row['last_name'];
          $phone = $row['mobile'];
          $email = $row['email'];
          echo '
          
          <h3 id="ud" class="ud" style="color:white">customer Id: '.$id.' <br> customer name : '.$fname.' '.$lname.' <br>customer email : '.$email.' <br>telephone no : '.$phone.'<br></h3>
          <center><button class="edit"><a href="configure/removecustomer.php?id='.$id.'" style="text-decoration:none">remove</a></button></center>
         ';}
      }
    
    
      ?>
   
 </div>



 
   <div class="clear"></div> 
<?php
    include "Footer.php";
?>