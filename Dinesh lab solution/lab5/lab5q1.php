<?php
$name = "Ram";
$number = "12345";
$email = "ram@gmail.com";
$phone1 = "981-234-5678";
$phone2 = "+977-01-1234567";
$password = "Ram@1234";

// a. Name validation
if(preg_match("/^[A-Za-z ]+$/",$name)){
	echo "Name valid<br>";
}

// b. Number validation
if(preg_match("/^[0-9]+$/",$number)){
	echo "Number valid<br>";
}

// c. Email validation
if(preg_match("/^[a-z0-9._]+@[a-z]+\.[a-z]{2,}$/",$email)){
	echo "Email valid<br>";
}

// d. Phone validation
if(preg_match("/^98[0-9]-[0-9]{3}-[0-9]{4}$/",$phone1)){
	echo "Phone pattern 98x-xxx-xxxx valid<br>";
}
if(preg_match("/^\+977-01-[0-9]{7}$/",$phone2)){
	echo "Phone pattern +977 valid<br>";
}

// e. Password validation
if(preg_match("/^(?=.*[A-Z])(?=.*[a-z])(?=.*[0-9])(?=.*[@#$!]).{8,}$/",$password)){
	echo "Password valid<br>";
}
?>
