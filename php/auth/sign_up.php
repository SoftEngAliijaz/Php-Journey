<?php
echo "<h1>This is Php Login</h1> <br><br>";

if ($_POST) {
    echo "Your User Name is:" . $_POST['username'];
    echo "Your Email is:" . $_POST['email'];
    echo "Your Password is:" . $_POST['password'];
}