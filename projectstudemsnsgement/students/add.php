<?php
include('../includes/connection.php');
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name = $_POST['name'];
    $address = $_POST['address'];
    $roll = $_POST['roll'];
    $email = $_POST['email'];
    $faculty = $_POST['faculty'];
    $semester = $_POST['semester'];

    if ($faculty !== 'BIM' && $faculty !== 'BBA' && $faculty !== 'BBM') {
        echo "Invalid faculty selected.";
        exit;
    }
        // Valid faculty
    $sql = "INSERT INTO students (NAME, ADDRESS, ROLL, EMAIL, FACULTY, SEMESTER) 
            VALUES ('$name', '$address', '$roll', '$email', '$faculty', '$semester')";
    if (mysqli_query($connection, $sql)) {
        header("Location: list.php?msg=created");
        exit;
    } else {
        echo "Error: " . mysqli_error($connection);
    }
}
?>
<html>
<head>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<form method="post" action="add.php">
    Name:
    <input type="text" name="name" required>
    Address:
    <input type="text" name="address" required>
    Roll:
    <input type="text" name="roll" required>
    Email:
    <input type="email" name="email" required>
    Faculty:
    <select name="faculty" required>
        <option value="">Select Faculty</option>
        <option value="BIM">BIM</option>
        <option value="BBA">BBA</option>
        <option value="BBM">BBM</option>
    </select>
    Semester:
    <select name="semester" required>
        <option value="">Select Semester</option>
        <?php
        for ($i = 1; $i <= 8; $i++) {
            echo "<option value='$i'>Semester $i</option>";
        }
        ?>
    </select>
    <input type="submit" value="Save">
    <a class="back" href="list.php">Back to list</a>
</form>
</body>
</html>
