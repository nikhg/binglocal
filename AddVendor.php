<?php
$username = "nikhil";
$password = "password";
$hostname = "10.86.61.3"; 

$con=mysqli_connect($hostname,$username,$password,"localdb");

// Check connection
if (mysqli_connect_errno()) {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
}

mysqli_query($con,"INSERT INTO uservendors VALUES ('".$_POST['UserID']."','".$_POST['VendorID']."')");
mysqli_close($con);

echo json_encode("true");
?>