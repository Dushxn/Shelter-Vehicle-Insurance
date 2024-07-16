<?php
session_start();
if (!isset($_SESSION['usersid'])) {
    header("Location:login.php");
    exit();
}
include 'configure/connection.php';
include 'loginheadercustomer.php';
?>


<style>
    
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




<div>
  <center>
     <table>
        <tr>
            <th>Policy Number</th>
            <th>Description</th>
            <th>Date</th>
            <th>Authorized by</th>
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

        </tr>';
    }
}

?>


    </table>
    </center>
</div>




<div style="margin-bottom: 300px;"> </div>
<?php
include 'Footer.php';
?>