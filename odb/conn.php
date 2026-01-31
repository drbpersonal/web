<!-- Procedural aproach -->
<?php
$serverName='localhost';
$userName='root';
$password='';
$dbName="web_bim";
$conn = new mysqli($serverName,$userName,$password,$dbName);
if($conn->connect_error){
	die("connection failed:".$conn->connect_error);
}
echo"connected Successful";
?>