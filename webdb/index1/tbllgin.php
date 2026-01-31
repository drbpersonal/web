<?php
include("conn.php");
mysqli_select_db($conn,"web_BIM");
$sql="CREATE TABLE tbl_login( Uid INT PRIMARY KEY AUTO_INCREMENT, username VARCHAR(20),password VARCHAR(20),email VARCHAR(20))";

$res= mysqli_query($conn,$sql);
// Mysqli only give error in connection
if($res){
	echo"Table created sucessfully";
}
else{
	echo"Table already created". mysqli_error($conn);
}
?>
