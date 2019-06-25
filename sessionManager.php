
<?php
    require_once "JSUtil.php";
    session_start();

    $id = $_POST['id'];
    $pswd = $_POST['pswd'];
    
    try
    {
        if($con = mysqli_connect("localhost", "root", "", "doctors_db"))
        {
            $sql= "SELECT * FROM patient_profile where idNum=$id && pswd=$pswd";
            if($qry = mysqli_query($con, $sql))
            {
                $row = mysqli_num_rows($qry);
                $result = mysqli_fetch_array($qry);
                
                if($row > 0)
                {
                    $_SESSION['id'] = $result['idNum'];
                    $_SESSION['pswd'] = $result['pswd'];
                    $_SESSION['fstName'] = $result['fst_name'];
                    $_SESSION['lstName'] = $result['lst_name'];
                    $_SESSION['email'] = $result['email'];
                }
                else
                {
                    $row = 0;
                }
            }
            else alert("Error querying the database. \nPlease ensure that a connection is established.");       
        } 		  
    }
    catch(Exception $e)
    {
        alert($e);
    }
    finally
    {
        mysqli_close($con);
    }
 ?>