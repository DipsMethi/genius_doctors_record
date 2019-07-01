<?php

	include_once ("Utilities/SessionManager.php");
	include_once ("Utilities/JSUtil.php");

    $id = $_GET['id'];
    $row = getMedicalProfile($id); // Gets patients latest medical history 

    if((isset($_POST['save']) ))
    {
      try
      {
          $bloodPressure = $_POST['bloodPressure'];
          $bloodSugar = $_POST['bloodSugar'];
          $heartRate = $_POST['heartRate'];
          $other = $_POST['other'];
          $summary = $_POST['summary'];
          $prescription = $_POST['prescription'];
          
          $connStr = mysqli_connect("localhost","root","","doctors_db");
          if( $connStr )
          {
              $query = "INSERT INTO patient_medical_record (idNum,blood_pressure,blood_sugar,ht_rate,other,summary,prescription) VALUES ('$id','$bloodPressure','$bloodSugar','$heartRate','$other','$summary','$prescription')";
              $result = mysqli_query($connStr, $query);
          }
      }
      catch(Exception $ex)
      {
          alert( "Exception ex: " . $ex->getMessage() );
      }
      finally
      {
          // Close database
          mysqli_close($connStr);

          // Redirect to patient_dashboard.php
          echo "<script> window.location.href = 'patient_dashboard.php'; </script>";       
      }    
    }

    function getMedicalProfile($id)
    {
        try
        {
            $conStr = mysqli_connect("localhost","root","","doctors_db");
            $query = " SELECT * FROM patient_medical_record WHERE idNum='$id' ";
            //$query .= " SELECT fst_name,email FROM patient_profile WHERE idNum ='$id' ";

            $result = mysqli_query($conStr,$query);
            
            if(mysqli_num_rows($result) > 0)
                return mysqli_fetch_array($result);
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

<?php


$sel=$_POST["selDoc"];
$rat=$_POST["rate"];


$conn = mysqli_connect("localhost","root","","doctors_db");
$sql = "UPDATE pat_profile SET `rate`='$rat' WHERE `name`='$sel'";
mysqli_query($conn, $sql);


header("location:patient_dashboard.php");


?>