
<?php

    function alert($msg)
    {
        echo "<script type='text/javascript'> alert('$msg'); </script>";
    }

    function isValid()
    {
        $_idNum = $_POST['id'];
        $_password = $_POST['password'];

        $connectionString = mysqli_connect("localhost", "root", "", "doctors_db");
        $result = mysqli_query($connectionString, "SELECT * FROM patient_profile WHERE idNum='$_idNum' && password='$_password'");

        $rows = mysqli_num_rows($result);

        if( $rows > 0 )
            return true;
        else
            return false; 
    }

    if(isValid())
    {
        header("location: patient_dashboard.html");
    }
    else
    {
        alert("Invalid login credentials.");
    }
    
?>