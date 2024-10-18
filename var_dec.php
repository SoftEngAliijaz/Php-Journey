<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Php Variable Declaration</title>
    <style>
    body {
        margin: 0;
        padding: 10px;
        align-items: center;
        text-align: center;
        justify-content: center;
    }

    h3 {
        margin: 0;
        display: flex;
        align-items: center;
        text-align: center;
        justify-content: center;
    }
    </style>


</head>

<body>
    <h3>In This We will learn about how to declare php variable</h3>


    <?php
    $emp = 'Flutter Developer & Web Developer';
    $isMale = true;
    $isGoodInMath = false;
    $marks = 50.0;

    function information()
    {
        $name = 'Muhammad Ali';
        $age = 22;

        var_dump($age);
    }


    information();

    ?>
</body>

</html>