<?php

$host = 'localhost';
$user = 'root';
$pass = '';
$dbName = 'tours';
$webLink = '';
$appName = 'Tours Website';
$currency = '$';


$conn = mysqli_connect($host, $user, $pass, $dbName);

// Check connection
if (mysqli_connect_errno()) {
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
    exit();
}
