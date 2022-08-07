<?php 
session_start();
// Destroy session
if(session_destroy()) {
    // Redirecting To login 
    header("Location: ../../index.php");
}
?>
