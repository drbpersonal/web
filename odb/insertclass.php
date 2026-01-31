<?php
include"conclass.php";
class Insertclass{
private $conn;
public function __construct(){
    $this->conn = new conclass();
}
public function insertstudent($name, $address, $roll){
$sql="INSERT INTO STUDENT (name,address,roll)
VALUES('$name','$address','$roll')";
if($this->conn->query($sql)===TRUE){
	echo"New record created successfully";
}
else{
	echo"Error:".$sql."<br>".$this->conn->error;
}
   
}


public function getStudent(){
$sql="select * from STUDENT";
$result = $this->conn->query($sql);
if($result->num_rows > 0){
    return $result->fetch_all(MYSQLI_ASSOC);
}
else{
	return[];
}
}


public function updateStudent($name, $address, $roll){
$sql= "update student set NAME='$name',ADDRESS='$address',ROLL='$roll' where SID=$id";
}


public function deleteStudent($id){
	$sql="DELETE FROM STUDENT WHERE SID='$id'";
	if($this->conn->query($sql)===TRUE){
		return"Record deleted successfully";
}
}
}
?>