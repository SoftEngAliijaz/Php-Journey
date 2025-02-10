<?php
$userModel = [
    [
        "name" => "Muhammad Ali",
        "email" => "M.Ali@gmail.com",
        "password" => "Ali123!"
    ],
    [
        "name" => "Muhammad Hassaan",
        "email" => "M.Hassaan@gmail.com",
        "password" => "Hassaan123!"
    ],
    [
        "name" => "Ayesha Khan",
        "email" => "Ayesha.Khan@gmail.com",
        "password" => "Ayesha456!"
    ],
    [
        "name" => "Zainab Akhtar",
        "email" => "Z.Akhtar@yahoo.com",
        "password" => "Zainab789!"
    ],
    [
        "name" => "Ahmed Raza",
        "email" => "Ahmed.Raza@hotmail.com",
        "password" => "Raza1234!"
    ]


];
// using encode this will show data like {"key":"value"} OR Vice Versa
$userModelToJson = json_encode($userModel, JSON_PRETTY_PRINT);
echo "$userModelToJson";