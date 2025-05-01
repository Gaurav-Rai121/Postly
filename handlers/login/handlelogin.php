<?php
   include('../../components/db/dbconnect.php');

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $email = $_POST['username'];
    $password = $_POST['password'];

    // Query to check if the user exists
    $query = "SELECT * FROM `users` WHERE `username`='$email' OR `user_email`='$email' ";
    $result = mysqli_query($myconnect, $query);
 
    if (mysqli_num_rows($result)== 1) {
        $user = mysqli_fetch_assoc($result);
        
        // Verify the password
        if (password_verify($password, $user['user_password'])) {
            // Password is correct, start the session
            session_start(); // Start the session
            session_regenerate_id(true);
            $_SESSION['id']=$user['id'];
            $_SESSION['LoggedIN']=true;
            $_SESSION['username'] = $user['username']; // Store username in session
            $_SESSION['email'] = $user['email']; // Optionally store email
            $_SESSION['error_message'];
            $_SESSION['success_message'];

            $_SESSION['csrf_token'] = bin2hex(random_bytes(32));
           
            // Redirect to home page
            $image=$user['profile_image'];

            if($image==null)
            {
            header("location: ../../pages/user/profileimage.php");
            exit();
            }

            else{
                header("location: ../../pages/public/home.php");
                exit();
            }
        }
         else {
            $error= "The email or password you entered doesn't match our records. Please double-check and try again.";
            header('location:../../pages/auth/login.php?error='.urldecode($error).'');
        }
    } else {
        $error= "The email or password you entered doesn't match our records. Please double-check and try again.";
        header('location:../../pages/auth/login.php?error='.urldecode($error).'');
    }
}

else{
    $error= "An unexpected error occurred. Please try again later.";
    header('location:../../pages/auth/login.php?error='.urldecode($error).'');
}
?>
