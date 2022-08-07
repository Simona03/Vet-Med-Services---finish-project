<?php

session_start();
require('config.php');
if (isset($_POST['action'])) {
	$name =  $_POST['name'];
 $staffId = $_POST['id'];
	$password = $_POST['password'];
     $pass = md5($password);
	$email = $_POST['email'];


	$sql = "INSERT INTO profiles (staffId,email,password,name)
	 VALUES ('$staffId','$email','$pass','$name')";
	if (mysqli_query($con, $sql)) {
		header("Location: ../Pages/Profiles/staffProfiles.php");
	} else {
		echo "Error: " . $sql . "
" . mysqli_error($con);
	}
	mysqli_close($con);
}
