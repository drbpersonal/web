<!-- Procedural aproach -->
<?php
$serverName='localhost';
$userName='root';
$password='';
$conn =mysqli_connect($serverName,$userName,$password);
if(!$conn){
	die("connection failed". mysqli_connect_error($conn));
}
//echo"connection Successful";
mysqli_select_db($conn, 'web_bim');

?>