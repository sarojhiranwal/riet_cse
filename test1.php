<?php 
require 'phptest.php';

$lines = file('users.csv', FILE_IGNORE_NEW_LINES|FILE_SKIP_EMPTY_LINES);
$csv = array_map('str_getcsv', $lines);

$users = [];
foreach($csv as $row) {
    $name = $row[0];
    $surname = $row[1];
    $email = $row[2];
    $stmt = $conn->query('INSERT INTO users (`name`, `surname`, `email`) 
    VALUES ("'.$name.'","'.$surname.'","'.$email.'")'); 

}

$conn->close();
