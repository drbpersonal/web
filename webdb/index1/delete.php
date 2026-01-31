<?php
$id=$_GET['id'];
include("conn.php");
mysqli_select_db($conn,"web_bim");
$sql="Delete from tbl_login where Uid=$id";
$res=mysqli_query($conn,$sql);
if($res){
	header('location:list.php?msg=true');
}
?>
