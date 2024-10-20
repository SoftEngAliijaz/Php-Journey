<?php
echo "This is Php Login <br><br>";

if ($_GET) {
    echo "User Name is " . $_GET['name'] . "<br><br>";
    echo "User Password is " . $_GET['password'];
}