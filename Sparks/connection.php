<?php
$servername = "localhost";
$username = "root";
$password = "";
$db_name ="banking";

// Create connection
$conn = new mysqli($servername, $username, $password,$db_name);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
?>
\*password=c7^sb8Ay$9YFCz6Y*\