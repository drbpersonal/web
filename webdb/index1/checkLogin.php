<?php
session_start();
include"conn.php";
$username=$_POST['username'];
$password=sha1($_POST['password']);
$sql="select* from tbl_login where username='$username' and password='$password'";
$res=mysqli_query($conn, $sql);
if(mysqli_num_rows($res)==1){
    $_SESSION['is_logged_in']=true;
    $row=mysqli_fetch_assoc($res);
    $_SESSION['email']=$row['email'];
    header('location:home.php');
}
else{
    header('location:login.php?err=true');
}
?>