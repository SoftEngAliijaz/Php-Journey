<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Php Journey Login</title>
    <link rel="stylesheet" href="styles.css" type="text/css">
</head>

<body>
    <div class="main">
        <div class="space">
            <h2 class="logintitle">Welcome to Php Journey</h2>
        </div>
        <div class="login-Box">
            <div>
                <h2>Log In</h2>
            </div>
            <div class="fields">
                <form action="" method="post">
                    <div class="input-field">
                        <input class="input" type="email" name="email" placeholder="E-mail">
                    </div>
                    <div class="input-field">
                        <input class="input" type="password" name="password" placeholder="Enter Password">
                    </div>

                    <div class="checkbox">
                        <label for="checkbox"><input type="checkbox"></label><span> I agree to the terms and
                            conditions</span>
                    </div>

                    <div>
                        <button type="submit" class="btn" action="sign_up.php">Log In</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>

</html>