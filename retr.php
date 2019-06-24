<?php


$sel=$_POST["selDoc"];
$rat=$_POST["rate"];


$conn = mysqli_connect("localhost","root","","doctors_db");
$sql = "UPDATE pat_profile SET `rate`='$rat' WHERE `name`='$sel'";
mysqli_query($conn, $sql);


header("location:index.php")

?>