<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Form Handling</title>
    <link rel="stylesheet" type="text/css" href="form_handling_styles.css">
</head>

<body>
    <div class="form-container">
        <form class="form-decoration" action="form_handling.php" method="post">
            <label for="name">Enter Your Name:</label>
            <input type="text" id="name" name="name" required>

            <label for="email">Enter Your Email:</label>
            <input type="email" id="email" name="email" required>

            <label for="phone">Enter Your Phone Number:</label>
            <input type="tel" id="phone" name="phone" required>

            <label for="comment">Enter Your Comment:</label>
            <input type="text" id="comment" name="comment" required>

            <input type="submit" id="submit-button" value="Submit">
        </form>
    </div>

    <?php
    $name = $email = $phone = $comment = "";

    function test_input($data)
    {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $name = test_input($_POST['name']);
        $email = test_input($_POST['email']);
        $phone = test_input($_POST['phone']);
        $comment = test_input($_POST['comment']);

        echo "<h3>Your Input:</h3>";
        echo "Name: $name<br>";
        echo "Email: $email<br>";
        echo "Phone: $phone<br>";
        echo "Comment: $comment<br>";
    }
    ?>
</body>

</html>