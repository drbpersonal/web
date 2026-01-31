<?php
$username="ram123";
$password="ram@12";
$phone="9812345600";

if(empty($username)||empty($password)||empty($phone)){
	echo "Fields cannot be empty";
}
elseif(strlen($password)<6){
	echo "Password too short";
}
elseif(!preg_match("/^98[0-9]{6}00$/",$phone)){
	echo "Phone invalid";
}
else{
	echo "Data valid";
}
?>
