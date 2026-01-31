<?php
session_start();

// Login
$_SESSION['user'] = "admin";
echo "Login Success<br>";

// Logout
session_destroy();
echo "Logout Success";
?>
