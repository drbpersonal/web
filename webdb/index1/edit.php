<?php
$id = $_GET['id'];
include "conn.php";
mysqli_select_db($conn, "web_bim");
$sql = "select*from tbl_login where Uid = $id";
$res = mysqli_query($conn,$sql);
    $row = mysqli_fetch_assoc($res);
    $username = $row['username'];
    $email = $row['email'];
    $password = $row['password'];
?>

<form method="post" action="update.php?id=<?php echo $id;?>">
    Username: <input type="text" name="username" value="<?php echo $username; ?>"><br><br>
    Email: <input type="text" name="email" value="<?php echo $email; ?>"><br><br>
    Password: <input type="password" name="password" value="<?php echo $password; ?>"><br><br>
    <input type="submit" value="UPDATE">
</form>
