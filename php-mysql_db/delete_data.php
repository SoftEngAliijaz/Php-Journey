<form action="" method="post">

</form>

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
         <td>" .
        "<form method=post>
        <button name=delete value =" . $studentData['id'] . "> DELETE </button>
        </form>"
        . "</td>

        <td><a href='update_data.php?id=" . $studentData['id'] . "'>Update</a></td>
       

</tr>";
}
echo "</table>";

if (isset($_POST["delete"])) {
    $id = $_POST['delete'];
    $result = $conn->prepare("delete from $tableName where id='$id'");
    $result->execute();

    if ($result->execute()) {
        echo "Deleted Successfully";
    } else {
        echo "ERRR";
    }
}

// Uncomment the lines below if you want to print JSON format
// $getJsonFormat = json_encode($getStudentsData, JSON_PRETTY_PRINT);
// echo "