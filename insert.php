<?php
include("connection.php");
error_reporting(0);

$fnm = $_POST['First_Name'];
$lnm = $_POST['Last_Name'];
$em = $_POST['Email_ID'];
$ph = $_POST['Phone_No'];
$ans1 = $_POST['Answer_1'];
$ans2 = $_POST['Answer_2'];

$query = "INSERT INTO pr1 VALUES('$fnm','$lnm','$em','$ph','$ans1','$ans2')";
$data = mysqli_query($conn, $query);

if ($data) {
  echo "Data inserted into database";
} else {
  echo "Data not inserted";
}


?>


