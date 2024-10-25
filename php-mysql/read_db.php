<?php
include("./config.php");

$tableName = "Students";

$getStudentsFromDatabase = $conn->prepare("SELECT * FROM $tableName");
$getStudentsFromDatabase->execute();
$getStudentsData = $getStudentsFromDatabase->fetchAll();

echo "<table border='1'>";
foreach ($getStudentsData as $studentData) {
    echo "<tr> 
        <td>" . $studentData['id'] . "</td>
        <td>" . $studentData['first_name'] . "</td>
        <td>" . $studentData['last_name'] . "</td>
        <td>" . $studentData['email'] . "</td>
        <td>" . $studentData['city'] . "</td>
        <td>" . $studentData['address'] . "</td>
    </tr>";
}
echo "</table>";

// Uncomment the lines below if you want to print JSON format
// $getJsonFormat = json_encode($getStudentsData, JSON_PRETTY_PRINT);
// echo "<pre>";
// print_r($getJsonFormat);