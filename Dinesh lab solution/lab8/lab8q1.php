<!DOCTYPE html>
<html>
<body>

<form method="POST" enctype="multipart/form-data">
    <input type="file" name="img">
    <input type="submit" value="Upload">
</form>

<?php
if (isset($_FILES['img'])) {
    move_uploaded_file($_FILES['img']['tmp_name'], "images/" . $_FILES['img']['name']);
    echo "Image uploaded successfully";
}
?>

</body>
</html>
