<?php
$id=$_GET['id'];
include("conn.php");
mysqli_select_db($conn,"web_bim");
$sql="Delete from student where SID=$id";
$res=mysqli_query($conn,$sql);
if($res){
	header('location:list.php?msg=true');
}
?>


<!-- <button onclick="deleteStudent(<?php echo $id; ?>)">Delete</button>



public function deleteStudent($id) {
	include("conn.php");
	mysqli_select_db($conn, "web_bim");
	
	$sql = "DELETE FROM STUDENT WHERE SID = $id";
	$res = mysqli_query($conn, $sql);
	
	if ($res) {
		header('location:list.php?msg=deleted');
		exit;
	} else {
		echo "Error deleting record: " . mysqli_error($conn);
	}
} -->