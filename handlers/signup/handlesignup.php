<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
 
    include('../../components/db/dbconnect.php');
    $name = $_POST['name'];
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $confirm_password = $_POST['confirm_password'];
    $mobile = $_POST['phone'];
    $gender = $_POST['gender'];
    $dob = $_POST['dob'];
 

    $Anyaccount = "SELECT * FROM `users` WHERE `username`='$username' OR `user_email`='$email'";
    $querry = mysqli_query($myconnect, $Anyaccount);
    $row = mysqli_num_rows($querry);
    
    if ($row > 0) {
        $error = "An account with this email or username already exists.";
        header('location:../../pages/auth/signup.php?error='.urldecode($error).'');
    }
    
    else {
        if ($password == $confirm_password) {

           
                $passHash = password_hash($password, PASSWORD_DEFAULT);
                $insert = "INSERT INTO `users`( `full name`, `username`, `user_email`, `user_password`, `mobile no`, `dob`, `gender`)
                 VALUES ('$name','$username','$email','$passHash','$mobile','$dob','$gender')";

                $querry2 = mysqli_query($myconnect, $insert);
                if ($querry2) {
                    header("location:../../pages/auth/login.php");
                } else {
                    $error= "An unexpected error occurred. Please try again later.";
                    header('location:../../pages/auth/signup.php?error='.urldecode($error).'');
                }
     
        } else {
            $error= "Passwords do not match. Ensure both fields contain the same password.";
            header('location:../../pages/auth/signup.php?error='.urldecode($error).'');
        }
    }
} else {
    $error= "An unexpected error occurred. Please try again later.";
    header('location:../../pages/auth/signup.php?error='.urldecode($error).'');
}
?>
