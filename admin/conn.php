<?php
$servername = "sql108.infinityfree.com";
$username = "if0_34962726";
$password = "gk4pPPG6dywQOC";
$db_name = "if0_34962726_purwoagung";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $db_name, 3306);

// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}

?>