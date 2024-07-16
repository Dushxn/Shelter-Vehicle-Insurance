<?php
include 'anvdbcon.php';
include 'anvcss.php';
?>
<?php
include 'Header.php'
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>updating and remove</title>
</head>
<div class="background">
<body>
    <div class="container">
        <center>
         <h2>Database</h2>
        <table class="table table-hover">
            <thead class="thead">
                
                <th scope="col">ID </th>
                <th scope="col">First name </th>
                <th scope="col">Last name </th>
                <th scope="col">Vehicle model </th>
                <th scope="col">Manufacture year </th>
                <th scope="col">License plate </th>
                <th scope="col">Insurance type</th>
                
                
            </thead>
            </center>
            <tbody>
                <?php
                $sql='Select * from `addnew`';
                $result=mysqli_query($con,$sql);
                if($result){
                    while($row=mysqli_fetch_assoc($result)){
                        $ID=$row['ID'];
                        $First_name=$row['First_name'];
                        $Last_name=$row['Last_name'];
                        $Vehicle_model=$row['Vehicle_model'];
                        $Manufacture_year=$row['Manufacture_year'];
                        $License_plate=$row['License_plate'];
                        $Insurance_type=$row['Insurance_type'];
                        echo ' <tr>
                        <th scope="row">'.$ID.'</th>
                        <td>'.$First_name.'</td>
                        <td>'.$Last_name.'</td>
                        <td>'.$Vehicle_model.'</td>
                        <td>'.$Manufacture_year.'</td>
                        <td>'.$License_plate.'</td>
                        <td>'.$Insurance_type.'</td>
                        
                        
                        
                        </tr>';
                    }
                }

                ?>

                


            </tbody>
        </table>


    </div>
</body>

<?php
include 'Footer.php'
?>
    </html>