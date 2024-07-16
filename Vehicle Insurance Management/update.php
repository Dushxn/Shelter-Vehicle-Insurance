<?php
session_start();
if (!isset($_SESSION['usersid'])) {
    header("Location:login.php");
    exit();
}
include 'configure/connection.php';
$pno = $desc = $date = $auth = "";

  $id = $_GET['updateid'];

  $sql = "SELECT * FROM policy WHERE p_no = $id";
  $result = mysqli_query($conn, $sql);
  $row = mysqli_fetch_assoc($result);
  $pno = $row['p_no'];
  $desc = $row['description'];
  $date = $row['date'];
  $auth = $row['auth_by'];

  if(isset($_POST['submit'])){
    $pno = $_POST['pno'];
    $desc = $_POST['policy'];
    $date = $_POST['date'];
    $auth = $_POST['auth'];

    $sql = "UPDATE policy SET p_no = '$pno', description = '$desc', date = '$date', auth_by = '$auth' WHERE p_no = $id";
    $result = mysqli_query($conn, $sql);

    if($result){
      
       header('location: display.php');
    }else{
      die(mysqli_error($conn));
    }
  }


include 'loginheader.php';
?>

<style>
  .top {
    padding: 20px;
    text-align: center;
  }

  .content {
    max-width: 800px;
    margin: 0 auto;
    padding: 20px;
  }

  .content label {
    display: block;
    font-weight: bold;
    margin-bottom: 5px;
  }

  .content input[type="text"],
  .content input[type="number"],
  .content input[type="date"],
  .content textarea {
    width: 100%;
    padding: 10px;
    border: 1px solid #ccc;
    border-radius: 4px;
  }

  .actions {
    text-align: center;
  }

  .actions input {
    padding: 10px 20px;
    background-color: #333;
    color: #fff;
    border: none;
    border-radius: 4px;
    cursor: pointer;
  }

  .actions input:hover {
    background-color: #999;
  }
</style>

<div class="top">
  <h1>Policy Management</h1>
  <h2>Add New Policy</h2>
</div>

<div class="content">
  <form method="POST" action="">
  <label>Policy Number:</label><br>
<input type="text" name="pno" value="<?php echo $pno ?>" required><br><br>

<label>Policy:</label><br>
<textarea name="policy" rows="4" required><?php echo $desc ?></textarea><br><br>

<label>Date:</label><br>
<input type="date" name="date" value="<?php echo $date ?>"><br><br>

<label>Authorized by:</label><br>
<input type="text" name="auth" value="<?php echo $auth ?>" required><br><br>

    <div class="actions">
      <input type="submit" name="submit" value="Update">
    </div>
  </form>
</div>
<?php
include 'Footer.php';
?>