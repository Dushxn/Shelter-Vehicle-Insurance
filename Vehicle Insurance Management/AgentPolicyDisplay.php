<?php
    include 'AgentPolicyConnection.php';
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
        <title>List of Agent Policy</title>
    </head>
    <body>
        <style>
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

            /*.background {
            background-image: url("https://uploads-ssl.webflow.com/60b3da0d84c6fc314ee1893f/60b8b34f92d47ef7e9ce9382_bg-home-advantage-marketing-template-p-500.jpeg");
            padding-top: 10px;
            padding-bottom: 10px;
            background-repeat: no-repeat;
            background-size: cover;  
            }*/

           
            .btn1{
                background-color:#CCF48E;
                padding: 8px 16px;
                border: 2px solid #ACDB65;
                border-radius: 4px;
                cursor: pointer;
                margin-left: 1080px;
                margin-top: 18px;
                margin-bottom: 10px;
                width: 150px;
                height: 33px;
            }
            .btn1:hover {
            background-color: #ACDB65;           
            }
            .btn1 a{
                color:black;
            }

            .btn2{
                background-color:#CDE7F1;
                
                border: 2px solid #B4D1DD;
                border-radius: 4px;
                cursor: pointer;
              
            }
            .btn2:hover {
            background-color: #A1CFE3;           
            }
            .btn2 a{
                color:black;
            }

            .btn3{
                background-color:#E99C6E;
               
                border: 2px solid #F47A56;
                border-radius: 4px;
                cursor: pointer;
               
            }
            .btn3:hover {
            background-color: #F47A56;           
            }
            .btn3 a{
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
                    <h2><b> List of Agent Policies </b></h2>
                </div>
                <div>
                    <button class="btn1" ><a href="AgentPolicy.php"><b> Add Agent Policy </b></a></button>
                </div>
            </div>
        <table>
        <thead>
            <tr>
            <th scope="col">Policy ID</th>
            <th scope="col">Policy Name</th>
            <th scope="col">Date Created</th>
            <th scope="col">Duration</th>
            <th scope="col">Description</th>
            <th scope="col">Operation</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $sql_query = "select * from agentpolicy";
            $result=mysqli_query ($con, $sql_query);

            if($result){
                while($row =mysqli_fetch_assoc($result) ){
                    $Policy_ID = $row['policyID'];
                    $Policy_Name = $row['policyName'];
                    $Date = $row['dateCreated'];
                    $Years = $row['duration'];
                    $des = $row['description'];
                    echo '<tr>
                        <th scope="row">'.$Policy_ID.'</th>
                        <td>'.$Policy_Name.'</td>
                        <td>'.$Date.'</td>
                        <td>'.$Years.'</td>
                        <td>'.$des.'</td>

                        <td>
                            <button class="btn2"><a href="Updateagent.php?updatepolicyID='.$Policy_ID.'"><b>Update</b></a></button>
                            <button class="btn3"><a href="Deleteagent.php?deletepolicyID='.$Policy_ID.'"><b>Delete</b></a></button> 
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