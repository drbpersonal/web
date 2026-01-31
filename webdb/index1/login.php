 <?php
if(isset($_GET['lgn'])){
	echo"please login to continue";
}
else{ header('location:login.php?err=true');
}
if (isset($_GET['err'])) {
    echo "Invalid username or password.";
}
?>
?>
<form action="checkLogin.php"method="post">
Username:<input type="text" name="username" ><br><br>
Password:<input type="password" name="password"><br><br>
<input type="submit" value="LOGIN">
</form>
Not a member?<a href="signup.php">Click Here</a>

