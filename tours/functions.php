<?php
include "config.php";
session_start();
//Login Function
if(isset($_GET['login']) && $_GET['login']==1){
    $data=$_POST;
    // $hash_pass=password_hash($_POST['password'],PASSWORD_DEFAULT);
    // print_r($hash_pass); die();
    $result = mysqli_query($conn,"SELECT * from customers where customer_email='$data[email]'");

    if(mysqli_num_rows($result)>0){
       $user= mysqli_fetch_assoc($result);

        if(!password_verify($data['password'],$user['password_hash'])){
            echo '<script>alert("Password is wronged or not matched!");window.location.href="login.php"</script>';

        }
        $_SESSION["user"] = $user;
       echo '<script>alert("Login Success!");window.location.href="index.php"</script>';
        
    }
    else{
       echo '<script>alert("Email is wronged or not registered!");window.location.href="login.php"</script>';

    }

}
//Register function
if(isset($_GET['register']) && $_GET['register']==1){
    $data=$_POST;
    $hash_pass=password_hash($data['password'],PASSWORD_DEFAULT);
    $result = mysqli_query($conn,"SELECT * from customers where customer_email='$data[email]'");

    if(mysqli_num_rows($result)>0){
       echo '<script>alert("Email Already registered!"); window.location.href="register.php"</script>';
    }
    else{
        $result = mysqli_query($conn,"INSERT INTO `customers`(`customer_forename`,`customer_surname`,`username`,`customer_email`, `password_hash`,`date_of_birth`)
			VALUES('$data[first_name]','$data[last_name]','$data[username]','$data[email]','$hash_pass','$data[dob]')");
       echo '<script>alert("Account registered successfully!"); window.location.href="login.php"</script>';

    }

}

//Logout Function
if(isset($_GET['logout']) && $_GET['logout']==1){
        unset($_SESSION["user"]);
		header("location:login.php");
}

//Book Function
if(isset($_GET['book']) && $_GET['book']==1){
    $data=$_POST;
    $transactionId=rand(100000,999999);
    $userId=$_SESSION['user']['customerID'];

        $result = mysqli_query($conn,"INSERT INTO `booking`(`excursionID`,`customerID`, `excursion_date`,`num_guests`,`total_booking_cost`,`booking_notes`)
        VALUES('$data[excursionID]','$userId','$data[date]','$data[tickets]','$data[total_cost]','$data[note]')");
    
    echo '<script>alert("Excursion Booked Successfully!"); window.location.href="my-bookings.php"</script>';

}


?>