<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Handling in Php</title>
</head>

<body>
    <!-- POST -->
    <form action="welcome.php" method="POST">
        Name: <input type="text" name="Name">
        Email: <input type="text" name="Email">
        <input type="submit">
    </form>
    Welcome <?php echo $_POST["name"]; ?><br>
    Your email address is: <?php echo $_POST["email"]; ?>


    <!-- GET -->
    <form action="welcome_get.php" method="GET">
        Name: <input type="text" name="name"><br>
        E-mail: <input type="text" name="email"><br>
        <input type="submit">
    </form>
    Welcome <?php echo $_POST["name"]; ?><br>
    Your email address is: <?php echo $_POST["email"]; ?>
</body>

</html>