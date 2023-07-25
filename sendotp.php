<?php
session_start();
include("connection.php");
//include("index.js");
error_reporting(0);



$nm = $_POST['Name'];
$em = $_POST['Email'];
$otp = $_POST['OTP'];


$query1 = "INSERT INTO otp VALUES('$nm','$em','$otp')";
$data1 = mysqli_query($conn, $query1);
$_SESSION['Email']=$em;

if ($data1) {
  echo "OTP sent! Proceed to confirm OTP";
} else {
  echo "Email Incorrect, OTP could not be sent";
}


?>

