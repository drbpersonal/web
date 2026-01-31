<?php
if(isset($_GET)){
	echo"Table updated successfully";
}
?>
<table border="1" cellspacing="0",cellpadding="5">
	<thead>
		<tr>
			<th> SN </th>
			<th> Name </th>
			<th> Address</th>
			<th> Roll </th>
			<th> Action </th>
		</tr>
	</thead>
<tbody>
<?php
require"conn.php";
//for select database db
mysqli_select_db($conn,"web_bim");
$sql="SELECT*FROM STUDENT";
$res=mysqli_query($conn,$sql);
//mysqli_fetch_row($res);gives index array us
//mysqli_fetch_assoc($res);givs associative array
//$row=mysqli_fetch_assoc($res); for only one array
$sn=1;
//for multiple array
while($row=mysqli_fetch_assoc($res)){
    echo "<tr>";
    echo"<td>".$sn."</td>";
    echo"<td>".$row['NAME']."</td>";
    echo"<td>".$row['ADDRESS']."</td>";
    echo"<td>".$row['ROLL']."</td>";
    echo"<td><a href='edit.php?id=$row[SID]'>Edit</a>||<a href='delete.php?id=$row[SID]'>Delete</a></td>";
    echo"</tr>";
$sn++;
}

?>
</tbody>
</table>


</form>
