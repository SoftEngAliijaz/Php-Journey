<?php
$host = "localhost";
$username = "root";
$password = null;
$db = "college";

$conn = new mysqli($host, $username, $password, $db);

if ($conn->connect_error) {
    die('Failed to Connect with Database');
}
echo 'Success';

$result = $conn->query('show tables')->fetch_all();
print_r($result);