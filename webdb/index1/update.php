<?php
include("conn.php");
mysqli_select_db($conn,'web_bim');

$id=$_GET['id'];
$username=$_POST['username'];
$email=$_POST['email'];
$password=sha1($_POST['password']);
$sql= "update tbl_login set username='$username', password='$password', email='$email' where Uid=$id";
echo $sql;
$res= mysqli_query($conn,$sql);
if($res){
	echo"Data updated sucessfully";
		header('location:list.php?msg=true');
}
else{
	echo"Error";
}
?>


