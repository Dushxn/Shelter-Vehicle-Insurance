<?php
session_start();
if (!isset($_SESSION['usersid'])) {
    header("Location:login.php");
    exit();
}
include "configure/connection.php";
include "css/displayclaimformcss.php";
include "loginheader.php";
?>
<hr>
<div class="background">
            <center><h2><b>REQUSTED CLAIMS</b></h2></center>
            <br>

    <table>
        <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">VID</th>
                <th scope="col">Plate Number</th>
                <th scope="col">Date and Time</th>
                <th scope="col">Location</th>
                <th scope="col">Description of the Accident</th>
                <th scope="col">Description of the Damage</th>
            </tr>
        </thead>
        <tbody>
        <?php
            $sql_query = "select * from claimform";
            $result=mysqli_query ($conn, $sql_query);

            if($result){
                while($row =mysqli_fetch_assoc($result) ){
                    $id = $row['id'];
                    $VID = $row['VID'];
                    $Plate_Number = $row['Plate_Number'];
                    $Date_Time = $row['Date_Time'];
                    $Location = $row['Location'];
                    $Description_accident= $row['Description_accident'];
                    $Description_damage= $row['Description_damage'];


                    echo '<tr>
                        <th scope="row">'.$id.'</th>
                        <td>'.$VID.'</td>
                        <td>'.$Plate_Number.'</td>
                        <td>'. substr($Date_Time,0,-7).'</td>
                        <td>'.$Location.'</td>
                        <td>'.$Description_accident.'</td>
                        <td>'.$Description_damage.'</td>

                     
                    </tr>';
                }
            }
            ?>


        </tbody>
    </table>
</div>

<?php include "Footer.php" ?>
</body>

</html>