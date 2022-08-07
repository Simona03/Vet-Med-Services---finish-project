
<?php session_start();
include('config.php');
$result = mysqli_query($con, "SELECT * FROM profiles  ");
?>