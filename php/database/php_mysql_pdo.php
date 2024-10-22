<?php
$host = "localhost";
$username = "root";
$password = null;
$db = "college";


try {
    $conn = new PDO("mysql:host=$host;dbname=$db", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Success";
} catch (PDOException $error) {
    echo $error;
}

$result = $conn->query('show tables');
while ($row = $result->fetch(PDO::FETCH_NUM)) {

    print_r($row);
}