<?php
$id=$_GET['id'];
$name=$_POST['name'];
$add=$_POST['address'];
$roll=$_POST['roll'];
include("conn.php");
mysqli_select_db($conn,'web_bim');
$sql= "update student set NAME='$name',ADDRESS='$add',ROLL='$roll' where SID=$id";
$res= mysqLi_query($conn,$sql);
if($res){
	echo"Data updated sucessfully";
		header('location:list.php?msg=true');
}
else{
	echo"Error";
}
?>

