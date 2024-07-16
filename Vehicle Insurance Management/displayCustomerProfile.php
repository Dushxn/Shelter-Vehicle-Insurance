<?php
include 'connection.php';

?>

<!DOCTYPE html>
<html>
    <head><title></title></head>
    <body>
      <h3>WELCOME!</h3>
        <div>

            

    <?php
    $sql="select * from user_details";
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
          <h3>Customer ID: '.$id.'</h3>
          <h3>Name: '.$fname.' '.$lname.'</h3>
          <h3>DOB: '.$dob.'</h3>
          <h3>NIC: '.$nic.'</h3>
          <h3>Gender: '.$gender.'</h3>
          <h3>Address: '.$street_1.' '.$street_2.' '.$city.' '.$province.' '.$zip_code.'</h3>
          <h3>Phone no:'.$phone.'</h3>
          <h3>Email:'.$email.'</h3>
          <h3>username:'.$username1.'</h3>
          <button><a href="updateCustomerProfile.php? editid='.$id.'">Edit</a></button><br><br><br>
          ';
      }
  }
    ?>
<button><a href="">View Policies</a></button><br>
<button><a href="">veiw vehicle</a></button><br>
<button><a href="">Request claim</a></button><br>

  </tbody>
</table>

        </div>
    </body>
</html>