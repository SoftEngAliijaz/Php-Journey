<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Loops</title>
</head>

<body>

    <?php
    ///while
    $num = 1;
    while ($num <= 10) {
        $num++;
        echo "jahdkajss";
    }

    ///do while

    $i = 1;

    do {
        echo $i;
        $i++;
    } while ($i < 6);
    // for loop

    for ($x = 0; $x <= 10; $x++) {
        echo "The number is: $x <br>";
    }

    // for each loop
    $colors = array("red", "green", "blue", "yellow");

    foreach ($colors as $x) {
        echo "$x <br>";
    }
    ?>
</body>

</html>