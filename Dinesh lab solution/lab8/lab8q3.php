<?php
// Connect database
$conn = mysqli_connect("localhost", "root", "");

if (!$conn) {
    die("Connection failed");
}

// Create Database safely
mysqli_query($conn, "CREATE DATABASE IF NOT EXISTS labdb");

// Select Database
mysqli_select_db($conn, "labdb");

// Create Table safely
mysqli_query($conn, "
    CREATE TABLE IF NOT EXISTS student(
        id INT PRIMARY KEY,
        name VARCHAR(50)
    )
");

// -------- CREATE --------
mysqli_query($conn, "INSERT INTO student VALUES(1,'Ram')");
mysqli_query($conn, "INSERT INTO student VALUES(2,'Hari')");
echo "Data inserted<br>";

// -------- READ --------
$result = mysqli_query($conn, "SELECT * FROM student");
while ($row = mysqli_fetch_assoc($result)) {
    echo $row['id'] . " " . $row['name'] . "<br>";
}

// -------- UPDATE --------
mysqli_query($conn, "UPDATE student SET name='Sita' WHERE id=1");
echo "Data updated<br>";

// -------- DELETE --------
mysqli_query($conn, "DELETE FROM student WHERE id=2");
echo "Data deleted<br>";
?>
