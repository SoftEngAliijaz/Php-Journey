<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Functions in Php</title>
</head>

<body>
    <?php
    function familyName($fname)
    {
        echo "$fname Refsnes.<br>";
    }

    familyName("Jani");
    familyName(20);
    familyName(20.0000000);
    familyName("Kai Jim");
    familyName("Borge"); ?>
</body>

</html>