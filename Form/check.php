<?php
$name=$_POST['name'];
$email=$_POST['email'];
$roll=$_POST['roll'];
$nameReg="/^[A-Za-z]*$/";
$rollReg="/^[0-9]*$/";
$emailReg="/^[A-Za-z0-9.+-_]*@[A-Za-z0-9.]*\.[A-Za-z]{2,}$/";
//print_r($_REQUEST);
	if(empty($name)||empty($email)||empty($roll)){
	echo"All field are required";
	}
	elseif(strlen($name)<8)
	{
    echo"Name should be greater then 8";
	}
	elseif (!preg_match($nameReg,$name)) {
		echo("Alphabet only");
	}
	elseif($roll<=1||$roll>=30)
	{
		echo"Roll must be greater then 1 and less then 30";
	}
	elseif (!preg_match($rollReg,$roll)) {
		echo "Number only";
	}
	elseif (!preg_match($emailReg,$email)) {
		echo"email should match pattern correctly";
	}
	else{
		echo"The name is:".$name."<br>";
		echo"The name is:".$roll."<br>";
		echo"The name is:".$email."<br>";
	}
//Name should only contain alphabets.
?>