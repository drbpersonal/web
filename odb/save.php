<?php
include'conn.php';
$name=$_POST['name'];
$address=$_POST['address'];
$roll=$_POST['roll'];
$sql="INSERT INTO STUDENT (NAME,ADDRESS,ROLL)VALUES('$name','$address','$roll')";
if($conn->query($sql)===TRUE){
	echo"New record created successfully";
}
else{
	echo"Error:".$sql."<br>".$conn->error;
}
?>