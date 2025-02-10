<form action="" method="post">
    <input type="text" name="first_name" placeholder="Enter Your Name">
    <br><br>
    <input type="text" name="last_name" placeholder="Enter Your Last Name">
    <br><br>
    <input type="text" name="email" placeholder="Enter Your Email">
    <br><br>
    <input type="text" name="city" placeholder="Enter Your City">
    <br><br>
    <input type="text" name="address" placeholder="Enter Your Address">
    <br><br>
    <input type="submit" value="submit">


</form>

<?php
include("./config.php");
$tableName = "Students";

if (isset($_POST['first_name'])) {
    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $email = $_POST['email'];
    $city = $_POST['city'];
    $address = $_POST['address'];


    $data = $conn->prepare("
INSERT INTO `$tableName` (`id`, `first_name`, `last_name`, `email`, `city`, `address`) 
VALUES (NULL, '$first_name', '$last_name', '$email', '$city', '$address')");

    $result = $data->execute();

    // Check if the data was inserted successfully
    if ($result) {
        echo "Data has been inserted successfully.";
    } else {
        echo "Error: " . implode(", ", $data->errorInfo()); // Show detailed error message
    }
}
