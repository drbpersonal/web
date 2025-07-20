<?php
include("conn.php");
$sql="CREATE DATABASE web_BIM";
$res= mysqLi_query($conn,$sql);
// Mysqli only give error in connection
if($res){
	echo"DB created";
}
else{
	echo"DB Created failed". mysqli_error($conn);
}
?>