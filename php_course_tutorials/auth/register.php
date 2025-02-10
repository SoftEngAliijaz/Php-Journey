<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Php Journey SignUp</title>
    <link rel="stylesheet" href="styles.css" type="text/css">
</head>

<body>
    <div class="main">
        <div class="space">
            <h2 class="logintitle">Welcome to Php Journey</h2>
        </div>

        <div class="signUp-Box">
            <div>
                <h2>Sign Up</h2>
            </div>
            <div class="fields">
                <form action="" method="post">
                    <div class="name-fields">
                        <input class="mid" type="text" name="fName" placeholder="First Name">
                        <input class="mid" type="text" name="lName" placeholder="Last Name">
                    </div>
                    <div class="input-field">
                        <input class="input" type="email" name="email" placeholder="E-mail">
                    </div>
                    <div class="input-field">
                        <input class="input" type="password" name="password" placeholder="Enter Password">
                    </div>
                    <div class="input-field">
                        <input class="input" type="password" name="confirmPass" placeholder="Confirm Password">
                    </div>
                    <div class="checkbox">
                        <label for="checkbox"><input type="checkbox"></label><span> I agree to the terms and
                            conditions</span>
                    </div>
                    <div>
                        <button type="submit" class="btn">Sign Up</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>

</html>