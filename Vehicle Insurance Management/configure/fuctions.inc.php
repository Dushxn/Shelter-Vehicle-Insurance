<?php 
     
     function uidExist($conn, $username1){
        $sql = "SELECT * FROM user_details WHERE username = ?;";
        $stmt = mysqli_stmt_init($conn);
        if(!mysqli_stmt_prepare($stmt, $sql)){
            echo "error";
            exit();
        }
        mysqli_stmt_bind_param($stmt, "s", $username1);
            mysqli_stmt_execute($stmt);
            $resultdata = mysqli_stmt_get_result($stmt);

            if($row = mysqli_fetch_assoc($resultdata)){
                return $row;
            }else {
                return false;
            }
            mysqli_stmt_close($stmt);
    }
    /*function uidExist1($conn, $username1){
        $sql = "SELECT * FROM agent WHERE A_username = ?;";
        $stmt = mysqli_stmt_init($conn);
        if(!mysqli_stmt_prepare($stmt, $sql)){
            echo "error";
            exit();
        }
        mysqli_stmt_bind_param($stmt, "s", $username1);
            mysqli_stmt_execute($stmt);
            $resultdata = mysqli_stmt_get_result($stmt);

            if($row = mysqli_fetch_assoc($resultdata)){
                return $row;
            }else {
                return false;
            }
            mysqli_stmt_close($stmt);
    }

    function uidExist3($conn, $username1){
        $sql = "SELECT * FROM manager WHERE M_username = ?;";
        $stmt = mysqli_stmt_init($conn);
        if(!mysqli_stmt_prepare($stmt, $sql)){
            echo "error";
            exit();
        }
        mysqli_stmt_bind_param($stmt, "s", $username1);
            mysqli_stmt_execute($stmt);
            $resultdata = mysqli_stmt_get_result($stmt);

            if($row = mysqli_fetch_assoc($resultdata)){
                return $row;
            }else {
                return false;
            }
            mysqli_stmt_close($stmt);
    }*/
   
   

   
    function Loginuser($conn, $username, $password ){
        $uidexist = uidExist($conn, $username);
        if($uidexist === false)
        {
            header("Location:../login.php?error=wronglogin");
            exit();
        }
        $pwdhashed = $uidexist["password"];
        $checkpwd = password_verify($password, $pwdhashed);

        if($checkpwd === false)
        {
            header("Location:../login.php?error=wrongpassword");
            exit();
        }else if ($checkpwd === true)
        {
            session_start();
            $_SESSION["usersid"] = $uidexist["ID"];
            $_SESSION["username"] = $uidexist["username"];
            $_SESSION["role"] = $uidexist["role"];
            $_SESSION["fname"] = $uidexist["first_name"];
            $_SESSION["lname"] = $uidexist["last_name"];

            if($_SESSION['role'] !== 'admin')
            {
                header("Location:../customerprof.php");
            }else if($_SESSION['role'] === 'admin')
            {
                header("Location:../adminprof.php");
            }

            
            exit();
        }

    }

    /*function LoginCustomer($conn, $username1, $password1 ){
        $uidexist1 = uidExist($conn, $username1);
        if($uidexist1 === false)
        {
            header("Location:../login.php?error=wronglogin1");
            exit();
        }
        $pwdhash = $uidexist1["password"];
        $checkpw = password_verify($password1, $pwdhash);

        if($checkpw === false)
        {  
            
            header("Location:../login.php?error=wrongpassword");
            exit();
        }else if ($checkpw === true)
        {
            session_start();
            $_SESSION["usersid"] = $uidexist1["ID"];
            $_SESSION["username"] = $uidexist1["username"];
            $_SESSION["fname"] = $uidexist1["first_name"];
            $_SESSION["lname"] = $uidexist1["last_name"];
            header("Location:../customerprof.php");
            exit();
        }

    }

    function Loginmanager($conn, $username3, $password3 ){
        $uidexist = uidExist3($conn, $username3);
        if($uidexist === false)
        {
            header("Location:../stafflog.php?error=wronglogin");
            exit();
        }
        $pwdhashed = $uidexist["M_password"];
        $checkpwd = password_verify($password3, $pwdhashed);

        if($checkpwd === false)
        {
            header("Location:../stafflog.php?error=wronglogin");
            exit();
        }else if ($checkpwd === true)
        {
            session_start();
            $_SESSION["managerid"] = $uidexist["manager_Id"];
            $_SESSION["username"] = $uidexist["M_username"];
            $_SESSION["role"] = $uidexist["Role"];
            $_SESSION["name"] = $uidexist["manager_name"];
            header("Location:../managerprof.php");
            exit();
        }
    }*/