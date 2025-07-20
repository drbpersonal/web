<?php
$unameerr=$nameerr=$emailerr=$passerr=$confpaserr=$gendererr=$fileerr=$error='';
$username=$name=$email=$gender=$password=$confirmpass='';
if($_SERVER['REQUEST_METHOD']=='POST'){
$username=$_POST['username'];
$name=$_POST['name'];
$email=$_POST['email'];
$password=$_POST['password'];
$confirmpass=$_POST['confirmpass'];

$nameReg  = "/^[A-Za-z ]+$/";
$emailReg="/^[A-Za-z0-9.+-_]*@[A-Za-z0-9.]*\.[A-Za-z]{2,}$/";
$passReg = "/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[\W_]).{8,}$/";
if (empty($username)||empty($name)||empty($email)||empty($gender)||empty($password)||empty($confirmpass)||empty($_FILES['image']['name'])) {
    $error = "All fields are required.";
}
//elseif (!preg_match($nameReg, $name)) {
      //  $nameerr = "Name must contain only alphabets.";
   // }
elseif (!preg_match($nameReg, $name)) {
        $nameerr = "Name must contain only alphabets.";
    }
elseif (!preg_match($emailReg, $email)) {
        $emailerr = "Invalid email format.";
    }
elseif (empty($gender)) {
        $gendererr = "Gender is required.";
    }
elseif (!preg_match($passReg, $password)) {
        $passerr = "Password must fulfill criteria";
    } 
elseif ($password !== $confirmpass) {
        $confpaserr = "Passwords do not match.";
    }
}
//elseif (!isset($_FILES['image']['type'], ['image/jpeg', 'image/png'])) {
       // $fileerr = "Only JPG and PNG files are allowed."; } 
?>
<div class="error">
		<span><?php echo $error;?></span>
</div>
<form action="<?php $_SERVER['PHP_SELF']?>"method="post">
Username:<input type="text" name="username" value="<?php echo $username;?>"><span class="error"><?php echo $unameerr;?></span><br><br>
Name:<input type="text" name="name" value="<?php echo $name;?>"><span class="error"><?php echo $nameerr;?></span><br><br>
Email:<input type="text" name="email" value="<?php echo $email;?>"><span class="error"><?php echo $emailerr;?></span><br><br>
Gender:<input type="radio"name="gender" class="gender"value="M">Male
<input type="radio"name="gender"class="gender"value="F">Female<br>
Password: <input type="password" name="password" value="<?php echo $password;?>"><span class="error"><?php echo $passerr;?></span><br><br>
Confirm Password: <input type="password" name="confirmpass" value="<?php echo $confirmpass;?>"><span class="error"><?php echo $passerr;?></span><br><br><br><br>
<input type="submit" value="SIGN UP">
</form>
<style>
	.error{
		background-color: red;
		color: white;
		width: 25%;
	}