
<?php
    // Start session
    if(session_start())
    {
        $_SESSION['id'] = $_POST['id'];
    }

    // Displays message box with $msg
    function alert($msg)
    {
        echo "<script type='text/javascript'> alert('$msg'); </script>";
    }

    // Authenticates login credentials
    function Authenticate()
    {
        $flag = false;

        $_idNum = $_POST['id'];
        $_password = $_POST['pswd'];

        $connectionString = mysqli_connect("localhost", "root", "", "doctors_db");
        
        $result = mysqli_query($connectionString, "SELECT idNum,pswd FROM patient_profile WHERE idNum='$_idNum' && pswd='$_password'");
        if(!$result) die("Fatal error");

        $rows = mysqli_num_rows($result);
        if( $rows > 0 )
        {
            $_SESSION['id'] = $_idNum;
            $flag = true;
        }
        return $flag;
    }

    if( Authenticate() )
    {
        header("location: patient_dashboard.html");
    }
    else
    {
        alert("Invalid login credentials.");
    }
?>