<!-- Procedural aproach -->
<?php
$serverName='localhost';
$userName='root';
$password='';
$dbName = 'web_bim'; 
$conn =mysqli_connect($serverName,$userName,$password,$dbName);
if(!$conn){
	die("connection failed". mysqli_connect_error());
}
//echo"connection Successful";
?>
