<?php
    include_once ("PHP/Utilities/JSUtil.php");
    include_once ("PHP/Utilities/SessionManager.php");

    try
    {
        $id = $_SESSION['id'];
        $row = getProfile($id); // Gets profile of patient

        if(isset($_POST['save']))
        {
            $pswd = $_POST['pswd'];
            $cPassword = $_POST['cPswd'];
            
            if( $cPassword == $pswd )
            {
                updateProfile($id);    
            } 
            elseif ($pswd != $cPassword)
            {
                alert("Password mismatch.");
            } 
        }
    }
    catch(Exception $ex)
    {
        alert($ex->getMessage());
    }

    function getProfile($id)
    {
        try
        {
            $conStr = mysqli_connect("localhost","root","","doctors_db");
            $query = "SELECT * FROM patient_profile WHERE idNum='$id'";
            $result = mysqli_query($conStr,$query);
            
            if(mysqli_num_rows($result) > 0)
                return mysqli_fetch_array($result);
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

    function updateProfile($id)
    {
        $fstName = $_REQUEST['fstName'];
        $lstName = $_REQUEST['lstName'];
        $pswd = $_REQUEST['pswd'];
        $email = $_REQUEST['email'];

        $c = mysqli_connect("localhost","root", "", "doctors_db");
        
        $q = "UPDATE patient_profile SET fst_name ='$fstName'
                                         ,lst_name ='$lstName'
                                         ,pswd ='$pswd'
                                         ,email ='$email'
                                     WHERE idNum='$id'";
        if(mysqli_query($c, $q))
        {
          route("patient_login.php");
        }
    }
?>