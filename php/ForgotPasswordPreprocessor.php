<?php
    require_once ("Utilities/JSUtil.php");
    include ("Utilities/MailManager.php");

    // Checks if RESET PASSWORD is clicked
    if(isset($_POST['btnReset']))
    {
        // Get clients email address
        $email = $_POST['email'];
        // Construct a MailManager
        $emailManager = new MailManager();
        // Get profile
        $profile = getProfile($email);
        // Check profile availability
        if($profile != NULL)
        {
            // Capture id
            $id = $profile[0];
            // Capture email
            $pswd = $profile[1];
            // Stage an email
            $emailManager->stageMail($email, "Password Reset"
                                    , "Below are your profile details\n\nID: $id\nPassword: $pswd"
                                    , "From: dipolelodips@gmail.com");
            // Send email
            $emailManager::send();
            
        }
        else
        {
            alert("No such user exists.");
        }  
    }

    // Returns system profile associated with email
    function getProfile( $email )
    {
        try 
        {
            $conResult = mysqli_connect("localhost", "root", "", "doctors_db");
            if($conResult)
            {
                $result = mysqli_query($conResult, "SELECT idNum,pswd patient_profile WHERE email=$email");
                if( mysqli_num_rows( $result ) > 0 )
                    return mysqli_fetch_array($result);
                else
                    return NULL;
            }
        } catch (my_sqli_exception $e) {
            alert($e);
        }
        finally
        {
            mysqli_close($conResult);
        }
    }
?>