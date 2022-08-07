<?php session_start();
require('config.php');
$result = mysqli_query($con, "SELECT * FROM bookhours  ");
?>