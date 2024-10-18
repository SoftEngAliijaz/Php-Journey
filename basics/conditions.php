<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Condition in Php</title>
</head>

<body>

    <?php
    // if else
    $t = 14;

    if ($t < 20) {
        echo "Have a good day!";
    } elseif ($t == 14) {
        echo "Youre 14";
    } else {
        echo "kjasjhdhkjashd";
    }


    ///short hand
    $a = 13;

    $b = $a < 10 ? "Hello" : "Good Bye";

    echo $b;


    //    nested 
    $a = 13;

    if ($a > 10) {
        echo "Above 10";
        if ($a > 20) {
            echo " and also above 20";
        } else {
            echo " but not above 20";
        }
    }

    ?>
</body>

</html>