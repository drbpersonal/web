<?php
include('../includes/connection.php');

$sql = "SELECT * FROM students";
$res = mysqli_query($connection, $sql);
?>

<!DOCTYPE html>
<html>
<head>
    <title>Student List</title>
    <link rel="stylesheet" href="style1.css">
</head>
<body>

<h3>Student List</h3>

<?php if (isset($_GET['msg'])): ?>
    <p style="color:green;"><?php echo ucfirst($_GET['msg']) ?> successfully.</p>
<?php endif; ?>

<a href="add.php">Add New Student</a>

<table>
    <thead>
        <tr>
            <th>SN</th>
            <th>Name</th>
            <th>Address</th>
            <th>Roll</th>
            <th>Email</th>
            <th>Faculty</th>
            <th>Semester</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
        <?php
        $sn = 1;
        while ($row = mysqli_fetch_assoc($res)) {
            echo "<tr>";
            echo "<td>{$sn}</td>";
            echo "<td>{$row['NAME']}</td>";
            echo "<td>{$row['ADDRESS']}</td>";
            echo "<td>{$row['ROLL']}</td>";
            echo "<td>{$row['EMAIL']}</td>";
            echo "<td>{$row['FACULTY']}</td>";
            echo "<td>{$row['SEMESTER']}</td>";
            echo "<td>
                    <a href='edit.php?id={$row['SID']}'>Edit</a> | 
                    <a href='delete.php?id={$row['SID']}' onclick=\"return confirm('Are you sure?')\">Delete</a>
                  </td>";
            echo "</tr>";
            $sn++;
        }
        ?>
    </tbody>
</table>

</body>
</html>
