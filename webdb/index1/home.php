<?php
session_start();
if(empty($_SESSION)){
header('location: login.php?red=true');
}
echo"Welcome!,".$_SESSION['email']."<br>";
echo "Logout<a href='logout.php'>logout</a>";
?>