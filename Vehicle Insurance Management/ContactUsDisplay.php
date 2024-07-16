<?php
    include 'ContactUsConnection.php';
    session_start();
if (!isset($_SESSION['usersid'])) {
    header("Location:login.php");
    exit();
}
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>List of Inquiries</title>
    </head>
    <body>
        <style>
           

            .background {
            background-image: url("https://uploads-ssl.webflow.com/60b3da0d84c6fc314ee1893f/60b8b34f92d47ef7e9ce9382_bg-home-advantage-marketing-template-p-500.jpeg");
            padding-top: 10px;
            padding-bottom: 10px;
            background-repeat: no-repeat;
            background-size: cover;  
            }

            table {
            border-collapse: collapse;
            border-spacing: 0;
            width: 100%;
            border: 1px solid #ddd;
            }

            th, td {
            text-align: left;
            padding: 10px;
            }

            tr:nth-child(even) {
            background-color: #f2f2f2;
            }

            .btn4{
                background-color:#ECF6A5;
               
                border: 2px solid #CCDC63;
                border-radius: 4px;
                cursor: pointer;
               
            }
            .btn4:hover {
            background-color: #CCDC63;           
            }
            .btn4 a{
                color:black;
            }
  
            a:link {
            text-decoration: none;
            }

            a:visited {
            text-decoration: none;
            }

            a:hover {
            text-decoration: none;
            }

            a:active {
            text-decoration: underline;
            }
           
        </style>
        <?php 
            include "loginheader.php";    
        ?>
        <hr>
        <div class ="background">
           
            <div style="display: flex;">
                <div>
                    <h2><b> List of Inquiries </b></h2>
                </div>
                
            </div>
        <table>
        <thead>
            <tr>
            <th scope="col">First Name</th>
            <th scope="col">Last Name</th>
            <th scope="col">Address</th>
            <th scope="col">Tele No</th>
            <th scope="col">E-mail</th>
            <th scope="col">Inquire Type</th>
            <th scope="col">Message</th>
            <th scope="col">Operation</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $sql_query1 = "select * from contactus";
            $result=mysqli_query ($con1, $sql_query1);

            if($result){
                while($row =mysqli_fetch_assoc($result) ){
                    $First_Name = $row['fName'];
                    $Last_Name = $row['lName'];
                    $Address = $row['address'];
                    $Mobile = $row['teleNo'];
                    $Email = $row['email'];
                    $Inquire_Type = $row['inquiryType'];
                    $Message = $row['message'];

                    echo '<tr>
                        <th scope="row">'.$First_Name.'</th>
                        <td>'.$Last_Name.'</td>
                        <td>'.$Address.'</td>
                        <td>'.$Mobile.'</td>
                        <td>'.$Email.'</td>
                        <td>'.$Inquire_Type.'</td>
                        <td>'.$Message.'</td>

                        <td>
                            <button class="btn4"><a href="View.php?viewteleNo='.$Mobile.'"><b>View</b></a></button>
                        </td>
                    </tr>';
                }
            }
            ?>


        </tbody>
        </table>
        </div>
        <div style="margin-bottom: 300px;"></div>
        <?php include "Footer.php" ?>
    </body>
</html>