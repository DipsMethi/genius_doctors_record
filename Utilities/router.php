
<?php
    include "Utilities/JSUtils.php";
    try
    {
        if( isValid($_POST['id'], $_POST['pswd']) )
            route("location: patient_dashboard.php");
        else
            alert("Invalid login credentials.");
    }
    catch(Exception $e)
    {
        alert($e);
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
            alert( $e->getMessage() );
        }
        finally
        {
            mysqli_close($conStr);
        }
    }
?>