<?php
$servername = "localhost";
$username = "root";
$password = "";
$db_name = "kimpurwoagung";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $db_name, 3306);

// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}
?>