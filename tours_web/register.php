<?php

$active = "register";
include "layout/header.php";

?>


<div class="container mt-3 bg-light login-form">
    <div class="row">
        <div class="col">
            <img src="assets/images/travel-login.png" width="100%" alt="" srcset="">
        </div>
        <div class="col">
            <h1 class="mb-5 mt-2">Register with us</h1>
            <p>Already have an account? <a href="login.php">Login now</a></p>

            <form action="functions.php?register=1" method="post">

                <input type="text" placeholder="First Name" required name="first_name" id="name" class="form-input">
                <input type="text" placeholder="Sur Name" name="last_name" class="form-input">
                <input type="text" placeholder="Username" required name="username" id="name" class="form-input">
                <input type="email" placeholder="Your email" required name="email" id="email" class="form-input">
                <input type="password" placeholder="Your Password" required name="password" class="form-input">
                <label for="">DOB</label>
                <input type="date" placeholder="Date of Birth" name="dob" required class="form-input">
                <button type="submit" name="submit" class="btn-theme">Register</button>
        </div>
    </div>
</div>
</form>
</div>
</div>

</div>
<br> <br>


<?php
include "layout/footer.php";

?>

</body>

</html>