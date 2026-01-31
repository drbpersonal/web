<?php
//$serverName='localhost';
//$userName='root';
//$password=''; for examination we have to use this inm palce of conn.php
//$db=;
//$conn =mysqli_connect($serverName,$userName,$password);
$name=$_POST['NAME'];
$add=$_POST['ADDRESS'];
$roll=$_POST['ROLL'];
include("conn.php");
mysqli_select_db($conn,'web_bim');
//$sql= "INSERT INTO STUDENT VALUE(1,'Dinesh','drb1per@gmail.com')";
//$sql= "INSERT INTO STUDENT VALUE(1,'Dinesh','drb1per@gmail.com')";
// this is for getting input from user in database table
$sql= "INSERT INTO STUDENT (NAME,ADDRESS,ROLL)VALUES('$name','$add','$roll')";

$res= mysqLi_query($conn,$sql);
// Mysqli only give error in connection
if($res){
	header('location:list.php?msg=true');
	echo"Data updated sucessfully";
}
else{
	echo"Error";
}
?>
