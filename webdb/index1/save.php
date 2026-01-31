<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

include("conn.php");

$uname = $_POST['username'];
$pword = sha1($_POST['password']);
$email = $_POST['email'];

$sql = "INSERT INTO tbl_login (username, password, email, is_verified) 
        VALUES ('$uname', '$pword', '$email', '0')";

$res = mysqli_query($conn, $sql);

if ($res) {
    header('Location: login.php');
    exit();
} else {
    echo "Error: " . mysqli_error($conn);
 }
?>
