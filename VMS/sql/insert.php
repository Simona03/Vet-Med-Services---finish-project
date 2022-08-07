<?php

session_start();
require('config.php');
if(isset($_POST['save']))
{	 
	 #get from contact form data
    #full name
    $full_name = $_POST['full_name'];
    #phone
    $phone = $_POST['phone'];
    #emial 
    $email = $_POST['email'];
    #massage
    $massage = $_POST['message'];
	 $sql = "INSERT INTO bookhours (full_name,phone,email,info)
	 VALUES ('$full_name','$phone','$email','$massage')";
	 if (mysqli_query($con, $sql)) {
        header("Location: ../../index.php");
	 } else {
		echo "Error: " . $sql . "
" . mysqli_error($con);
	 }
	 mysqli_close($con);
}