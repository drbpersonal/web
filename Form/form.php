<?php
$nameerr=$emailerr=$rollerr=$error='';
$name=$email=$roll='';
if($_SERVER['REQUEST_METHOD']=='POST'){
	$name=$_POST['name'];
$email=$_POST['email'];
$roll=$_POST['roll'];
$nameReg="/^[A-Za-z]*$/";
$rollReg="/^[0-9]*$/";
$emailReg="/^[A-Za-z0-9.+-_]*@[A-Za-z0-9.]*\.[A-Za-z]{2,}$/";
//print_r($_REQUEST);
	if(empty($name)||empty($email)||empty($roll)){
	//echo"All field are required";
		$error="All field are required";
	}
	/*elseif(strlen($name)<8)
	{
    //echo"Name should be greater then 8";
        $nameerr="Name only consist alphabet";
	}*/
	elseif (!preg_match($nameReg,$name)) {
		//echo("Alphabet only");
        $nameerr="Name only consist alphabet";
	}
	elseif($roll<=1||$roll>=30)
	{
		//echo"Roll must be greater then 1 and less then 30";
		//$rollerr="ROll must be greater than 1 and less than 30";
	}
	elseif (!preg_match($rollReg,$roll)) {
		$rollerr= "Number only";
	}
	elseif (!preg_match($emailReg,$email)) {
		//echo"email should match pattern correctly";
		$emailerr="match pattern";
	}
	else{
		echo"The name is:".$name."<br>";
		echo"The name is:".$roll."<br>";
		echo"The name is:".$email."<br>";
	}
}
?>
<div class="error">
	
	<span><?php echo $error;?></span>
	
</div>
<form action="#" method="post">
Name:<input type="text" name="name" value="<?php echo $name;?>"><span class="error"><?php echo $nameerr;?></span><br><br>
Email:<input type="text" name="email" value="<?php echo $email;?>"><span class="error"><?php echo $emailerr;?></span><br><br>
Roll:<input type="text" name="roll" value="<?php echo $roll;?>"><span class="error"><?php echo $rollerr;?></span><br><br>
<input type="submit"  >
</form>
<style>
	.error{
		background-color: red;
		color: white;
		width: 25%;
	}