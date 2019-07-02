<?php
    require_once ("PHP/Utilities/JSUtil.php");
    session_start();

    $id = $_REQUEST['id'];
    $pswd = $_REQUEST['pswd'];

    if($con = mysqli_connect("localhost", "root", "", "doctors_db"))
    {
        try
        {
            $sql= "SELECT * FROM patient_profile WHERE idNum='$id' && pswd='$pswd'";
            if($qry = mysqli_query($con, $sql))
            {        
                $result = mysqli_fetch_array($qry);
                $row = mysqli_num_rows($qry);
                
                if($row > 0)
                {
                    $_SESSION['id'] = $id;
                    $_SESSION['pswd'] = $pswd;
                    $_SESSION['fstName'] = $result['fst_name'];
                    $_SESSION['lstName'] = $result['lst_name'];
                    $_SESSION['email'] = $result['email'];
                }
            }
            else alert("Error querying the database. \nPlease ensure that a connection is established or the database exists.");       
        }
        catch(Exception $exception)
        {
            alert($exception);
        }
        finally
        {
            mysqli_close($con);
        }
    } 		  
?> 