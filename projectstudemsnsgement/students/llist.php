<?php
include('../includes/conn.php');

$sql = "SELECT * FROM students";
$res = mysqli_query($connection, $sql);

if (isset($_GET['msg'])) {
    echo ucfirst($_GET['msg']) . " successfully.";
}

echo "<table border='1'>
        <tr>
            <th>SN</th>
            <th>Name</th>
            <th>Address</th>
            <th>Roll</th>
            <th>Action</th>
        </tr>";

$sn = 1;
while ($row = mysqli_fetch_assoc($res)) {
    echo "<tr>
            <td>{$sn}</td>
            <td>{$row['NAME']}</td>
            <td>{$row['ADDRESS']}</td>
            <td>{$row['ROLL']}</td>
            <td><a href='edit.php?id={$row['SID']}'>Edit</a> | <a href='delete.php?id={$row['SID']}'>Delete</a></td>
          </tr>";
    $sn++;
}

echo "</table>";
?>
