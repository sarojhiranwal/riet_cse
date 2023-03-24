<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "phptest";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed because of: " . $conn->connect_error);
}

?>
