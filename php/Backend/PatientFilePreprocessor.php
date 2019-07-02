<?php
    include_once ("PHP/Utilities/SessionManager.php");
	include_once ("PHP/Utilities/JSUtil.php");

    $id = $_GET['id'];
    $row = getMedicalProfile($id); // Gets patients latest medical history 

    if((isset($_POST['save']) ))
    {
      try
      {
          // Capture form data
          $bloodPressure = $_POST['bloodPressure'];
          $bloodSugar = $_POST['bloodSugar'];
          $heartRate = $_POST['heartRate'];
          $other = $_POST['other'];
          $summary = $_POST['summary'];
          $prescription = $_POST['prescription'];
          
          $connStr = mysqli_connect("localhost","root","","doctors_db");
          // Checks database connection
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
            route('patient_dashboard.php');       
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
            alert( $e->getMesssage() );
        }
        finally
        {
            mysqli_close($conStr);
        }
    }
?>