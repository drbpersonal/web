<!DOCTYPE html>
<html>
<body>

<h3>User Form</h3>

<form method="post">
	Name: <input type="text" name="name"><br><br>
	Email: <input type="text" name="email"><br><br>
	Phone: <input type="text" name="phone"><br><br>
	Country:
	<select name="country">
		<option value="">Select</option>
		<option value="Nepal">Nepal</option>
		<option value="India">India</option>
	</select><br><br>
	Gender:
	<input type="radio" name="gender" value="Male">Male
	<input type="radio" name="gender" value="Female">Female
	<br><br>
	Interest:
	<input type="checkbox" name="interest[]" value="Music">Music
	<input type="checkbox" name="interest[]" value="Sports">Sports
	<br><br>
	<input type="submit" name="submit">
</form>

<?php
if(isset($_POST['submit'])){
$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$country = $_POST['country'];
$gender = isset($_POST['gender']) ? $_POST['gender'] : "";
$interest = isset($_POST['interest']) ? $_POST['interest'] : [];

if(empty($name)||empty($email)||empty($phone)||empty($country)||empty($gender)||empty($interest)){
	echo "All fields required";
}
elseif(!preg_match("/^[A-Za-z ]+$/",$name)){
	echo "Name invalid";
}
elseif(!preg_match("/^[0-9]{9}$/",$phone)){
	echo "Phone must be 9 digits";
}
elseif(empty($gender)){
	echo "Select gender";
}
elseif(count($interest)<1){
	echo "Select at least one interest";
}
else{
	echo "Form submitted successfully";
}
}
?>
</body>
</html>
