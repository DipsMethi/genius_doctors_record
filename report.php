 <?php

require 'C:\xampp\htdocs\genius_doctors_record\fpdf.php';


function alert($msg)
{
    echo "<script> alert($msg) </script>";
}


if(isset($_POST['report']))
{
    $id = $_POST['id'];
 try
 {
    $pdf=new FPDF();

    $pdf->AddPage();

    $pdf->SetFont("Arial","B",12);

    // Connect to database
    $conn= mysqli_connect("localhost", "root", "", "doctors_db");

    $query=mysqli_query($conn,"select * from patient_medical_record where idNum='$id' ");
    while($data=mysqli_fetch_array($query))
    {
        $pdf->Cell(0,10,"Patient file",1,1,"C");

        $pdf->Cell(50,10,"Blood Pressure ",1,0);
        $pdf->Cell(0,10,$data['blood_pressure'],1,1);


        $pdf->Cell(50,10,"Blood Sugar ",1,0);
        $pdf->Cell(0,10,$data['blood_sugar'],1,1);


        $pdf->Cell(50,10,"Heart Rate ",1,0);
        $pdf->Cell(0,10, $data['ht_rate'] ,1,1);


        $pdf->Cell(50,10,"Other ",1,0);
        $pdf->Cell(0,10, $data['other'],1,1);


        $pdf->Cell(50,10,"Summary ",1,0);
        $pdf->Cell(0,10, $data['summary'] ,1,1);


        $pdf->Cell(50,10,"Prescription ",1,0);
        $pdf->Cell(0,10, $data['prescription'] ,1,1);

        $pdf->Cell(50,10,"ID Number ",1,0);
        $pdf->Cell(0,10, $data['idNum'] ,1,1);
        $pdf->Output();
    }
}
catch(Exception $ex)
{
    alert('Exception: ' . $ex->getMessage());
}
finally
{
    // Close database
    mysqli_close($conn);
}
}

?>

