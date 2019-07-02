<?php
    include_once ("Utilities/JSUtil.php");

    // Check if REGISTER button is clicked
    if(isset($_POST['register']))
    {
        try
        {
            // Connect to database
            $connStr = mysqli_connect("localhost", "root", "", "doctors_db");
            if($connStr) // Check if connection was successful
            {
                // Get patient form data
                $pFirstName = $_POST['pFirstName'];
                $pLastName = $_POST['pLastName'];
                $pID = $_POST['pID'];
                $pEmail = $_POST['pEmail'];
                $pCell = $_POST['pCell'];
                $pSOS = $_POST['pSOS'];
                $pswd = $_POST['pPassword'];
                $pCPswd = $_POST['pConfirm'];
                $pAddr1 = $_POST['pAddr1'];
                $pCity = $_POST['pCity'];
                // Get guarantor data
                $gFirstName = $_POST['gFirstName'];
                $gLastName = $_POST['gLastName'];
                $gID = $_POST['gID'];
                $gCell = $_POST['gCell'];
                $gAddr = $_POST['gAddr'];
                $gCity = $_POST['gCity'];
                // Get insurance data
                $iTypePlan = $_POST['iTypePlan'];
                $insurer = $_POST['insurer'];
                $policyID = $_POST['policyID'];
                $iCell = $_POST['iCell'];

                if($pswd == $pCPswd)
                {
                    // Query string
                    $query = "INSERT INTO users (pFstName,pLstName,pID
                                                ,pCellNum,pAddr1,pCity,pEmail
                                                ,pSOSNum, pPswd,gFstName,gLstName,gID
                                                ,gCellNum,gAddr,gCity,iPlanType
                                                ,iInsurer,iPlcyID,iContacts) 
                                            VALUES('$pFirstName','$pLastName','$pID'
                                                ,'$pCell','$pAddr1','$pCity','$pEmail'
                                                ,'$pSOS','$pswd','$gFirstName','$gLastName'
                                                ,'$gID','$gCell','$gAddr','$gCity'
                                                ,'$iTypePlan','$insurer','$policyID','$iCell');";
                    // Upon registering, the system automatically creates user profile for new user      
                    $query .= "INSERT INTO patient_profile (idNum,fst_name,lst_name
                                                            ,pswd,cel_num,email)
                                            VALUES ('$pID','$pFirstName','$pLastName'
                                            ,'$pswd','$pCell','$pEmail');"; 
                                        
                    if(mysqli_multi_query($connStr, $query) == TRUE)
                    {
                        // Display modal and redirect to patient login
                        echo "<script>
                                // Show alert after successful registration
                                //alert(\"Thank you for registering.\");
                            
                                // Redirecting to patient_login.php
                                window.location.href = 'patient_login.php';
                                </script>";
                    }
                    else
                    {
                        echo "<script> alert(\"Some internal error has occured.\nPlease register later.\"); </script>";
                    }
                }
                else alert("Passwords mismatch");
            } 
        }
        catch(Exception $ex)
        {
            // Alert exception
            alert('Exception: ' . $ex->getMessage());
        }
        finally
        {
            // Close database
            mysqli_close($connStr);
        }
    }
?>