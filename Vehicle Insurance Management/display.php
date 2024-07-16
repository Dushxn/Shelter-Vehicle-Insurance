
<?php
 session_start();
 include "loginheader.php";
 if(!isset($_SESSION['username']))
 {
     header("Location:login.php");
     exit();
 }
 include "css/adminprofcss.php";
include 'configure/connection.php';

?>


<style>
    button {
      padding: 10px 20px;
      background-color: #333;
      color: #fff;
      border: none;
      border-radius: 4px;
      cursor: pointer;
      margin-bottom: 5px;
      margin-left: 10%;
    }
    
    .button:hover {
      background-color: #999;
    }
    button a {
      color: white;
      text-decoration: none;
    }

    
    table {
      width: 80%;
      border-collapse: collapse;
      align-items: center;
    }

    th, td {
      padding: 8px;
      text-align: left;
      border-bottom: 1px solid #ddd;
    }

    th {
      background-color: #f2f2f2;
    }

</style>


<button><a href="policy1.php">Add New Policy</a></button>


<div>
  <center>
     <table>
        <tr>
            <th>Policy Number</th>
            <th>Description</th>
            <th>Date</th>
            <th>Authorized by</th>
            <th></th>
        </tr>

<?php

$sql = "select * from policy ";
$result = mysqli_query($conn,$sql);

if($result){
    while($row=mysqli_fetch_assoc($result)){
        $pno=$row['p_no'];
        $desc=$row['description'];
        $date=$row['date'];
        $auth=$row['auth_by'];

        echo '<tr>
        <td>'.$pno.'</td>
        <td>'.$desc.'</td>
        <td>'.$date.'</td>
        <td>'.$auth.'</td>
        <td>
        <button><a href="update.php?updateid='.$pno.'">Update</a></button>
        <button><a href="configure/delete.php?deleteid='.$pno.'">Delete</a></button>
        </td>

        </tr>';
    }
}

?>


    </table>
    </center>
</div>




<div style="margin-bottom: 200px;"></div>
<?php
include 'Footer.php';
?>