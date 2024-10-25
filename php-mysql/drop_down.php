<?php
include("./config.php");

$data = $conn->prepare("SELECT * FROM STUDENTS");

$data->execute();

$result = $data->fetchAll();

echo "<select>";
echo "<option>Select an Option</option>";
foreach ($result as $value) {
    echo "<option value =" . $value['id'] . ">" . $value['first_name'] . " " . $value['last_name'] . "</option>";
}
echo "</select>";
