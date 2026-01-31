<?php
include('../includes/connection.php');

if (isset($_GET['id'])) {
    $id = $_GET['id'];

    $sql = "DELETE FROM students WHERE SID = $id";
    if (mysqli_query($connection, $sql)) {
        header("Location: list.php?msg=deleted");
        exit;
    } else {
        echo "Error deleting record: " . mysqli_error($connection);
    }
} else {
    // If no id provided, redirect to list
    header("Location: list.php");
    exit;
}
?>
