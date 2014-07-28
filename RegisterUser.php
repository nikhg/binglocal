<?php
$username = "nikhil";
$password = "password";
$hostname = "10.86.61.3"; 

$con=mysqli_connect($hostname,$username,$password,"localdb");

// Check connection
if (mysqli_connect_errno()) {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
}
mysqli_query($con,"INSERT INTO userdetails VALUES ('".$_POST['UserID']."','".$_POST['UserName']."','".$_POST['PhoneNumber']."','".$_POST['Address']."');");
mysqli_close($con);

echo json_encode("true");
?>