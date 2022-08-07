<?php require('config.php');
session_start();
// When form submitted, check and create user session.
if (isset($_POST['email'])) {

    $password_temp = stripslashes($_REQUEST['password']);
    $password = mysqli_real_escape_string($con, $password_temp);
    $email_temp = stripslashes($_REQUEST['email']);
    $email = mysqli_real_escape_string($con, $email_temp);
 
    // Check user is exist in the database
    $query    = "SELECT * FROM `profiles` WHERE  email ='$email'   AND password='" . md5($password) . "' ";
    $result = mysqli_query($con, $query) or die();
    $rows = mysqli_num_rows($result);
    if ($rows == 1) {
        if ($email == 'mony@admin.com') {
          
            header('Location: ../AdminPanel/dashboard.php');
        } else
            header("Location: ../Pages/home.php");
    } else {
        header('Location: ../index.php');
        
    }
} ?>