<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Website Footer</title>
        <style>
        /* Basic styles for the footer */
        .footer {
            display: flex;
            justify-content: end;
            align-items: center;
            padding: 10px 20px;
            background-color: #333;
            color: white;
            position: fixed;
            width: 100%;
            bottom: 0;
        }

        .footer .nav-links {
            display: flex;
            padding-right: 40px;
        }

        .footer .nav-links a {
            color: white;
            text-decoration: none;
            padding: 0 15px;
            font-size: 1em;
        }

        .footer .nav-links a:hover {
            text-decoration: underline;
        }
        </style>
    </head>

    <body>

        <div class="footer">
            <!-- Navigation Links -->
            <div class="nav-links">
                <a href="home.php">Home</a>
                <a href="contact.php">Contact</a>
                <a href="about.php">About</a>
            </div>
        </div>

    </body>

</html>