<?php
session_start();
include("connection.php");
//include("index.js");
error_reporting(0);



$otp = $_POST['OTP'];
$em=$_SESSION['Email'];

$query = "SELECT * FROM otp WHERE OTP='$otp' and Email='$em'";
$res=mysqli_query($conn,$query);
$count=mysqli_num_rows($res);
if ($count>0)
{
    mysqli_query($conn,"UPDATE otp SET OTP='' WHERE Email='$em'");
    echo "Otp verified";
}
else
    echo "Otp entered is incorrect! Please enter correct Otp.";
?>