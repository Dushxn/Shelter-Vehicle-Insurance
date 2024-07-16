<?php
include 'AgentPolicyConnection.php';

if(isset($_GET['deletepolicyID'])){
    $Policy_ID =$_GET['deletepolicyID'];

    $sql_query = "delete from agentpolicy where policyID= $Policy_ID";
    $result=mysqli_query ($con, $sql_query);

if($result){
    //echo "Deleted Successfully!";
    header('location:AgentPolicyDisplay.php');

}else
{
    echo "Error: ".$sql_query."".mysqli_error($con);
}
}
?>
