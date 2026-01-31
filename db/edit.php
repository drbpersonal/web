<!--WAP edit data of  student table
in the existing database.Taken input from user-->
<?php
$id=$_GET['id'];
include"conn.php";
mysqli_select_db($conn,"web_bim");
$sql="select*from student where SID=$id";
$res=mysqli_query($conn,$sql);
$row=mysqli_fetch_assoc($res);
$name=$row['NAME'];
$address=$row['ADDRESS'];
$roll=$row['ROLL'];
?>
<form method="post" action="update.php?id=<?php echo $id;?>">
Name:<input type="text" name="name"value="<?php echo $name;?>"><br><br>
Address:<input type="text" name="address"value="<?php echo $address;?>"><br><br>
Roll:<input type="" name="roll"value="<?php echo $roll;?>"><br><br>
<input type="submit" value="UPDATE">
</form>
