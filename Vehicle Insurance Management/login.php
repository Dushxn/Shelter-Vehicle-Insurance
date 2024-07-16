<?php
include 'Header.php';
include 'css/loginstyle.php';
?>


<div class="login">
    <h1>Sign in</h1><br><br>

    <form action="configure/userlogin.inc.php" method="post">
        <label>Username:</label><br>
        <input type="text" name="username"><br><br>

        <label>Password:</label><br>
        <input type="password" name="pword"> <br><br>

        <p>don't have an account? <a href="registration.php">Register</a></p>

        <?php
                if(isset($_GET["error"] ))
                {
                    if($_GET["error"] ==  "wrongpassword")
                    {
                       echo ' <p id="Vusername" style="color: red; " >invalid username or password</p> ';
                    }
                }
            ?>
        
        <input type="submit" id="submitbtn" name="submitbtn" value="Login">

    </form>
</div>

<?php
include 'Footer.php';
?>
