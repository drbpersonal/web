<?php
$unameerr = $nameerr = $emailerr = $passerr = $confpaserr = $gendererr = $fileerr = $error = '';
$username = $name = $email = $gender = $password = $confirmpass = $filename='';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $filename=$_FILES['photo']['name'];
    $type=['photo']['type'];
    $tmp=['photo']['tmp'];
    $size=['photo']['size'];
    $username= $_POST['username'];
    $name= $_POST['name'];
    $email= $_POST['email'];
    $gender= $_POST['gender'] ?? '';
    $password= $_POST['password'];
    $confirmpass= $_POST['confirmpass'];

    $usernameReg = "/^[A-Za-z]{6,}$/";
    $nameReg="/^[A-Za-z ]{9,}$/";
    $emailReg="/^[A-Za-z0-9._%+-]+@[A-Za-z0-9.-]+\.[A-Za-z]{2,}$/";
    $passReg="/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[\W_]).{8,}$/";

    if (empty($username)||empty($name)||empty($email)||empty($gender)||empty($password)||empty($confirmpass)||empty($_FILES['photo']['name'])) {
        $error = "All fields including photo are required.";
    }
    elseif (!preg_match($usernameReg, $username)) {
        $unameerr = "Username must have at least 6 alphabets with no spaces.";
    }
    elseif (!preg_match($nameReg, $name)) {
        $nameerr = "Name must be at least 9 characters with only letters and spaces.";
    }
    elseif (!preg_match($emailReg, $email)) {
        $emailerr = "Invalid email format.";
    }
    elseif (empty($gender)) {
        $gendererr = "Gender is required.";
    }
    elseif (!preg_match($passReg, $password)) {
        $passerr = "Password must have 1 uppercase, 1 lowercase, 1 number, 1 symbol, and be at least 8 characters.";
    }
    elseif ($password !== $confirmpass) {
        $confpaserr = "Passwords do not match.";
    }
    elseif (file_exists(name:"image/".$filename)) {
        die("file already exist");
    }
    elseif($type!='image/jpeg'&&$type!='image/png'&&$type!='image/jpg'){
        $fileupload=0;
        echo"Invalid image format upload jpeg or png";
    }
    elseif($size>500000000)
    {
        $fileupload=0;
        echo"photo is oversize";
    }
    elseif($fileupload==1){
    if(move_uploaded_file($temp, "image/".$filename)){
        echo"File uploaded successfully";
    }
    else{
        echo"Error in uploading file";
    }}
    else {
        echo "<strong>Registration Successful</strong><br>";
        echo "Username: $username<br>";
        echo "Name: $name<br>";
        echo "Email: $email<br>";
        echo "Gender:".($gender == "M"?"Male":"Female")."<br>";
        echo "Uploaded File:".$_FILES['photo']['filename']."<br>";
    }
}
?>
<div class="error">
    <span><?php echo $error; ?></span>
</div>

<form action="<?php echo $_SERVER['PHP_SELF'];?>" method="post" enctype="multipart/form-data">
    Username: <input type="text" name="username" value="<?php echo $username; ?>">
    <span class="error"><?php echo $unameerr; ?></span><br><br>

    Name: <input type="text" name="name" value="<?php echo $name;?>">
    <span class="error"><?php echo $nameerr; ?></span><br><br>

    Email: <input type="text" name="email" value="<?php echo $email; ?>">
    <span class="error"><?php echo $emailerr; ?></span><br><br>

    Gender:
    <input type="radio" name="gender" value="M" <?php if ($gender == "M") echo "checked"; ?>> Male
    <input type="radio" name="gender" value="F" <?php if ($gender == "F") echo "checked"; ?>> Female
    <span class="error"><?php echo $gendererr; ?></span><br><br>

    Password: <input type="password" name="password" value="<?php echo $password; ?>">
    <span class="error"><?php echo $passerr; ?></span><br><br>

    Confirm Password: <input type="password" name="confirmpass" value="<?php echo $confirmpass; ?>">
    <span class="error"><?php echo $confpaserr; ?></span><br><br>

    Photo: <input type="file" name="photo">
    <span class="error"><?php echo $fileerr; ?></span><br><br>

    <input type="submit" value="SIGN UP">
</form>

<style>
    .error {
        background-color: red;
        color: white;
        width: auto;
    }
</style>
