<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Arrays in Php</title>
</head>

<body>
    <?php
    // Associative Arrays:

    $car = array("brand" => "Ford", "model" => "Mustang", "year" => 1964);
    echo $car["model"];

    // update array
    $cars = array("Volvo", "BMW", "Toyota");
    $cars[1] = "Ford";

    //add array item
    $fruits = array("Apple", "Banana", "Cherry");
    $fruits[] = "Orange";

    // remove
    $cars = array("Volvo", "BMW", "Toyota");
    array_splice($cars, 1, 1);
    ?>
</body>

</html>