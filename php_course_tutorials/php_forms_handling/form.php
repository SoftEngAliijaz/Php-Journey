<?php
print_r($_POST);
echo "<br>";
echo "<br>";

if (isset($_POST['name'])) {
    echo "<h1>Here Are Your Details From Form:</h1>";
    echo 'Username is: ' . $_POST['name'] . '<br>';
    echo 'Email is: ' . $_POST['email'] . '<br>';
    echo 'Password is: ' . $_POST['password'] . '<br>';
    echo 'Skills are: ' . implode(", ", $_POST['skills']) . '<br>';
    echo 'Gender is: ' . $_POST['gender'] . '<br>';
    echo 'City is: ' . $_POST['city'] . '<br>';
    echo 'Bio is: ' . $_POST['bio'] . '<br>';
}