<?php
$active="login";
include "layout/header.php";

?>






<div class="container mt-3 bg-light login-form">
    <div class="row">
        <div class="col" >
            <img src="assets/images/travel-login.png" width="100%" alt="" srcset="">
        </div>
        <div class="col">
            <h1 class="mb-5 mt-2">Login to your account</h1>
            <p>Don't have an account? <a href="register.php">Register now</a></p>
            <form action="functions.php?login=1" method="post">
                        <label for="">Email</label>
                        <input type="email" placeholder="Your Email"  name="email" id="email" class="form-input">

                        <label for="">Password</label>
                        <input type="password" placeholder="Your Password" name="password"   class="form-input">
                        
                        <button type="submit"  name="submit" class="btn-theme">Login</button>
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