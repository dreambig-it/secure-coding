<?php
 $servername = "localhost:3307";
 $username = "root";
 $password = "password";
 $database = "cynewyear";
// Create connection
$con = mysqli_connect($servername, $username, $password, $database);

// Check connection
if (!$con) {
  die("Connection failed: " . mysqli_connect_error());
}
// To do debugging uncomment below code
// echo "Connected successfully";
?> 