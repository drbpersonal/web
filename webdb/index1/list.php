<?php
session_start();
//print_r($_SESSION);
//die();
if(empty($_SESSION)){
	header('location: login.php?lgn=false');
}
if(isset($_GET)){
	echo"Table updated successfully";
}
?>
<table border="1" cellspacing="0",cellpadding="5">
	<thead>
		<tr>
			<th> SN </th>
			<th> Username </th>
			<th> Password</th>
			<th> Email </th>
			<th> Action </th>
		</tr>
	</thead>
<tbody>
<?php
require"conn.php";
//for select database db
mysqli_select_db($conn,"web_bim");
$sql="SELECT*FROM tbl_login";
$res=mysqli_query($conn,$sql);
//mysqli_fetch_row($res);gives index array us
//mysqli_fetch_assoc($res);givs associative array
//$row=mysqli_fetch_assoc($res); for only one array
$sn=1;
//for multiple array
while($row=mysqli_fetch_assoc($res)){
    echo "<tr>";
    echo"<td>".$sn."</td>";
    echo"<td>".$row['username']."</td>";
	echo"<td>".$row['email']."</td>";
    echo"<td>".$row['is_verified']."</td>";
    echo"<td>".$row['password']."</td>";
	echo "<td><a href='edit.php?id=".$row['Uid']."'>Edit</a> || <a href='delete.php?id=".$row['Uid']."'>Delete</a></td>";
    echo"</tr>";
$sn++;
}

?>
</tbody>
</table>
