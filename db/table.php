<?php
include("conn.php");
mysqLi_select_db($conn,"web_BIM");
$sql="CREATE TABLE STUDENT(Sroll INT,Sname VARCHAR(20),Semail VARCHAR(20))";
$sql="CREATE TABLE STUDENT(Sroll INT,Sname VARCHAR(20),Semail VARCHAR(20))";
$res= mysqLi_query($conn,$sql);
// Mysqli only give error in connection
if($res){
	echo"Table created sucessfully";
}
else{
	echo"Table already created". mysqli_error($conn);
}
?>
