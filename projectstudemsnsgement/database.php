<?php
include("connection.php");
$sql="create database web_bim1";
$res=mysqli_query($connection,$sql);
if ($res){
    echo "Database created successfully";
}
else{
    echo "Database created failed".mysqli_error($connection);
}
?>