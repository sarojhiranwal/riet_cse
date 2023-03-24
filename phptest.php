<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "phptest";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed :as i am trying to understand: " . $conn->connect_error);
}

?>
