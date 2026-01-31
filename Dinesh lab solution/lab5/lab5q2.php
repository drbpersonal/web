<!DOCTYPE html>
<html>
<body>

<h3>Signup Form</h3>

<form method="post">
	Email: <input type="text" name="email"><br><br>
	Username: <input type="text" name="username"><br><br>
	Password: <input type="password" name="password"><br><br>
	Confirm Password: <input type="password" name="cpassword"><br><br>
	<input type="submit" name="submit">
</form>

<?php
if(isset($_POST['submit'])){
$email = $_POST['email'];
$username = $_POST['username'];
$password = $_POST['password'];
$cpassword = $_POST['cpassword'];

if(empty($email)||empty($username)||empty($password)||empty($cpassword)){
	echo "All fields required";
}
elseif(!filter_var($email,FILTER_VALIDATE_EMAIL)){
	echo "Invalid email";
}
elseif(!preg_match("/^[a-zA-Z0-9]{6,}$/",$username)){
	echo "Username invalid";
}
elseif(strlen($password)<8){
	echo "Password must be greater than 8 characters";
}
elseif($username==$password){
	echo "Username and password cannot be same";
}
elseif($password!=$cpassword){
	echo "Password not matched";
}
else{
	echo "Signup successful";
}
}
?>
</body>
</html>
