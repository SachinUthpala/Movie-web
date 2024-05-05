<?php
// Start the session
session_start();

// Unset all of the session variables
$_SESSION = array();

// Destroy the session cookie
if (isset($_COOKIE[session_name()])) {
    setcookie(session_name(), '', time()-42000, '/');
}

// Destroy the session
session_destroy();

// Redirect to the login page or any other desired page after logout
$_SESSION['logout'] = 1;
header("Location: ../index.php");
exit();
?>