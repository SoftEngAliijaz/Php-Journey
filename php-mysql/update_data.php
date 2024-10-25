</form>

<?php
include("./config.php");

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $getStudent = $conn->prepare("SELECT * FROM STUDENTS WHERE id = $id");
    $getStudent->execute();


    $student = $getStudent->fetchAll();

    $first_name = $student[0]["first_name"];
    $last_name = $student[0]["last_name"];
    $email = $student[0]["email"];
    $city = $student[0]["city"];
    $address = $student[0]["address"];
}

?>

<form action="" method="post">
    <input type="text" name="first_name" value="<?php echo $first_name ?>">
    <br><br>
    <input type="text" name="last_name" value="<?php echo $last_name ?>">
    <br><br>
    <input type="text" name="email" value="<?php echo $email ?>">
    <br><br>
    <input type="text" name="city" value="<?php echo $city ?>">
    <br><br>
    <input type="text" name="address" value="<?php echo $address ?>">
    <br><br>
    <input type="submit" value="submit">


</form>