
<?php
    try
    {
        if( isValid($_POST['id'], $_POST['pswd']) )
            header("location: patient_dashboard.php");
        else
            alert("Invalid login credentials.");
    }
    catch(Exception $e)
    {
        alert($e);
    }
    
    // Displays message box with $msg
    function alert($msg)
    {
        echo "<script type='text/javascript'> alert('$msg'); </script>";
    }

    function isValid($id, $pswd)
    {
        try
        {
            $conStr = mysqli_connect("localhost","root","","doctors_db");
            $res = null;
            $result = mysqli_query($conStr,"SELECT idNum,fst_name,lst_name,email 
                                FROM patient_profile 
                                WHERE idNum='$id' && pswd='$pswd'");
            
            if(mysqli_num_rows($result) > 0)
                return true;
            else
                return false;
        }
        catch(Exception $e)
        {
            echo "<script> alert($e); </script>";
        }
        finally
        {
            mysqli_close($conStr);
        }
    }
?>