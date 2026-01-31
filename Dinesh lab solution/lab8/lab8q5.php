<?php
// Connect to MySQL
$conn = mysqli_connect("localhost", "root", "");

if (!$conn) {
    die("Connection failed");
}

// Create Database
mysqli_query($conn, "CREATE DATABASE IF NOT EXISTS college");

// Select Database
mysqli_select_db($conn, "college");

// Create Table
mysqli_query($conn, "
CREATE TABLE IF NOT EXISTS student(
    id INT,
    name VARCHAR(50),
    address VARCHAR(50)
)
");

// Insert Data
mysqli_query($conn, "INSERT INTO student VALUES(1,'Ram','Kathmandu')");
mysqli_query($conn, "INSERT INTO student VALUES(2,'Hari','Lalitpur')");

// Display Data
$result = mysqli_query($conn, "SELECT * FROM student");
while ($row = mysqli_fetch_assoc($result)) {
    echo $row['id']." ";
    echo $row['name']." ";
    echo $row['address']."<br>";
}

// Update Data
mysqli_query($conn, "UPDATE student SET name='Sita' WHERE id=1");

// Delete Data
mysqli_query($conn, "DELETE FROM student WHERE id=2");

echo "Database operation completed";
?>
