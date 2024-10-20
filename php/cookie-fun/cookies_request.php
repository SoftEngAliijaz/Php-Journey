<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cookies Request</title>

    <style>
    .container {
        background-color: grey;
        padding: 10px;
        border-radius: 10px;
    }
    </style>
</head>

<body>

    <div class="container">
        <form action="" method="post">
            <input type="text" value="" name="user">
            <button name="button" value="set">Set Cookies</button>
            <button name="button" value="display">Display</button>
            <button name="button" value="delete">Delete</button>
        </form>

        <?php
        if (isset($_POST['button'])) {
            if ($_POST['button'] == 'set') {
                $val = $_POST['user'];
                setcookie('user', $val, time() + 1000, '/');
                echo 'Cookie is Set';
            } elseif ($_POST['button'] == 'display') {
                if (isset($_COOKIE['user'])) {
                    echo $_COOKIE['user'];
                } else {
                    echo 'No cookie found';
                }
            } elseif ($_POST['button'] == 'delete') {
                if (isset($_COOKIE['user'])) {
                    setcookie('user', '', time() - 3600, '/');
                    echo 'Cookie is deleted';
                } else {
                    echo 'No cookie to delete';
                }
            } else {
                die('Something Problem Occurred!');
            }
        }
        ?>
    </div>
</body>

</html>