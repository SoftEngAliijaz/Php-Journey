<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Website Header</title>
        <style>
        body {
            margin: 0;
            font-family: Arial, sans-serif;
        }

        .header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 10px 20px;
            background-color: #333;
            color: white;
        }

        .logo {
            display: flex;
            align-items: center;
        }

        .logo img {
            width: 50px;
            height: 50px;
            margin-right: 10px;
        }

        .logo span {
            font-size: 1.5em;
            font-weight: bold;
        }

        .nav-links {
            display: flex;
        }

        .nav-links a {
            color: white;
            text-decoration: none;
            padding: 0 15px;
            font-size: 1.1em;
        }

        .nav-links a:hover {
            text-decoration: underline;
        }
        </style>
    </head>

    <body>

        <div class="header">
            <div class="logo">
                <img src="https://miro.medium.com/v2/resize:fit:1200/1*auW7rkIRMxcsp42K-8FYfQ.png" alt="Logo">
                <span>Php Journey</span>
            </div>

            <!-- Navigation Links -->
            <div class="nav-links">
                <a href="index.php">Home</a>
                <a href="contact.php">Contact</a>
                <a href="about.php">About</a>
            </div>
        </div>

    </body>

</html>