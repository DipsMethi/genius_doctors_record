<?php

    include ("PHP/Utilities/JSUtil.php");          
    include ("PHP/Utilities/LoginManager.php");
    include_once ("PHP/Utilities/SessionManager.php");
    
    try
    {
        $id = $_POST['id'];
        $pswd = $_POST['pswd'];
        
        // Check if user entered credentials
        if( !empty($id) && !empty($pswd) )
        {
            // Alert whenever incorrect credentials entered, otherwise proceed to patient_dashboard
            if( !(new LoginManager($id,$pswd))::login() )
            {
                alert('Incorrect id/password.\nPlease varify your credentials.'); 
                route('patient_login.php');
            }
        }
        else
        {
          alert("Please enter ID and/ Password.");
          route('patient_login.php');
        }  
    }
    catch(Exception $e)
    {
        alert( $e->getMessage() );
    }

    // Adds names of doctors into list
    function printOptions()
    {
        $mysqli = new MySQLI("localhost","root","","doctors_db");
        $resultSet = $mysqli->query("SELECT name FROM doc_profile");

        while($row = $resultSet->fetch_assoc())
        {
            $name = $row['name'];
            echo "<option value='$name'>$name</option>";
        }
    }

    // Prints top three-rated doctors
    function printTopThree()
    {
        $conn = mysqli_connect("localhost","root","","doctors_db");
        if($qry = mysqli_query($conn,"SELECT * FROM doc_profile ORDER BY rate DESC limit 3"))
        {
            while($row = mysqli_fetch_assoc($qry))
            {
                echo "<tr>";
                echo "<td>".$row['name']."</td>";					
                if($row['rate']==1){ echo "<td><i class='fa fa-star'></i></td>"; }
                if($row['rate']==2){ echo "<td><i class='fa fa-star'></i><i class='fa fa-star'></i></td>"; }
                if($row['rate']==3){ echo "<td><i class='fa fa-star'></i><i class='fa fa-star'></i><i class='fa fa-star'></i></td>"; }
                if($row['rate']==4){ echo "<td><i class='fa fa-star'></i><i class='fa fa-star'></i><i class='fa fa-star'></i><i class='fa fa-star'></i></td>"; }
                if($row['rate']==5){ echo "<td><i class='fa fa-star'></i><i class='fa fa-star'></i><i class='fa fa-star'></i><i class='fa fa-star'></i><i class='fa fa-star'></i></td>"; }
                echo "</tr>";
            }
        }
    }
?> 