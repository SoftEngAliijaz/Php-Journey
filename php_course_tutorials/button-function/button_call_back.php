<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Button Call Back Function</title>
</head>

<body>
    <form action="" method="get">
        <button name="action-button" value="button-1">Call Function</button>
    </form>
</body>

</html>

<?php
// only request
if (isset($_REQUEST['action-button'])) {
    test_action_button();
}

function test_action_button()
{
    echo 'This Button is Pressed';
}
?>