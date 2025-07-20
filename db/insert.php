<?php
//$serverName='localhost';
//$userName='root';
//$password=''; for examination we have to use this inm palce of conn.php
//$db=;
//$conn =mysqli_connect($serverName,$userName,$password);

//include("conn.php");
mysqli_select_db($conn,'web_BIM');
$sql= "INSERT INTO STUDENT VALUE(1,'Dinesh','drb1per@gmail.com')";
$sql= "INSERT INTO STUDENT VALUE(1,'Dinesh','drb1per@gmail.com')";

$res= mysqLi_query($conn,$sql);
// Mysqli only give error in connection
if($res){
	echo"Data Inserted sucessfully";
}
?>
