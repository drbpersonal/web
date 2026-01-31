<?php
include('../includes/connection.php');

$id = $_GET['id'];

// Fetch student record
$sql = "SELECT * FROM students WHERE SID = $id";
$res = mysqli_query($connection, $sql);
$row = mysqli_fetch_assoc($res);

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name = $_POST['name'];
    $address = $_POST['address'];
    $roll = $_POST['roll'];
    $email = $_POST['email'];
    $faculty = $_POST['faculty'];
    $semester = $_POST['semester'];

    $sql = "UPDATE students SET 
            NAME = '$name', 
            ADDRESS = '$address', 
            ROLL = '$roll',
            EMAIL = '$email',
            FACULTY = '$faculty',
            SEMESTER = '$semester'
            WHERE SID = $id";

    if (mysqli_query($connection, $sql)) {
        header('Location: list.php?msg=updated');
        exit;
    } else {
        echo "Error: " . mysqli_error($connection);
    }
}
?>

<form method="post" action="edit.php?id=<?php echo $id; ?>">
    Name: <input type="text" name="name" value="<?php echo $row['NAME']; ?>" required><br><br>
    Address: <input type="text" name="address" value="<?php echo $row['ADDRESS']; ?>" required><br><br>
    Roll: <input type="text" name="roll" value="<?php echo $row['ROLL']; ?>" required><br><br>
    Email: <input type="email" name="email" value="<?php echo $row['EMAIL']; ?>" required><br><br>

    Faculty:
    <select name="faculty" required>
        <option value="">Select Faculty</option>
        <option value="BIM" <?php if ($row['FACULTY'] == 'BIM') echo 'selected'; ?>>BIM</option>
        <option value="BBA" <?php if ($row['FACULTY'] == 'BBA') echo 'selected'; ?>>BBA</option>
        <option value="BSW" <?php if ($row['FACULTY'] == 'BBM') echo 'selected'; ?>>BBM</option>
    </select><br><br>

    Semester:
    <select name="semester" required>
        <option value="">Select Semester</option>
        <?php
        for ($i = 1; $i <= 8; $i++) {
            $selected = ($row['SEMESTER'] == $i) ? 'selected' : '';
            echo "<option value='$i' $selected>Semester $i</option>";
        }
        ?>
    </select><br><br>

    <input type="submit" value="Update">
</form>
