<?php
include'conn.php';
$name=$_POST['uname'];
$email=$_POST['email'];
$password=$_POST['password'];
$sql="INSERT INTO STUDENT (NAME,ADDRESS,ROLL)VALUES('$name','$add','$roll')";
if($conn->query($sql)===TRUE){
	echo"New record created successfully";
}
else{
	echo"Error:".$sql."<br>".$conn->error;
}
$conn->close
?>