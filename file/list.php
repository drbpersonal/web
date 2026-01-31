<?php 
require "conn.php";

$sql = "SELECT * FROM student";
$result = $conn->query($sql);
?>

<a href="list.csv" download="list.csv">Download CSV</a>

<form method="post" action="uploadcsv.php" enctype="multipart/form-data">
    CSV: <input type="file" name="csvfile" required><br>
    <input type="submit" value="Upload CSV">
</form>

<table border="1" cellspacing="0" cellpadding="10">
    <thead>
        <tr>
            <th>Name</th>
            <th>Address</th>
            <th>Roll</th>
        </tr>
    </thead>
<tbody>
<?php
$sn = 1;
if ($result->num_rows > 0) {
    $file = fopen('list.csv', 'w');

    // Optional: CSV headers
    fputcsv($file, ['NAME', 'ADDRESS', 'ROLL']);

    while ($row = $result->fetch_assoc()) {
        // Write CSV row
        fputcsv($file, [$row['NAME'], $row['ADDRESS'], $row['ROLL']]);

        echo "<tr>";
        echo "<td>" . htmlspecialchars($row['NAME']) . "</td>";
        echo "<td>" . htmlspecialchars($row['ADDRESS']) . "</td>";
        echo "<td>" . htmlspecialchars($row['ROLL']) . "</td>";
        
        echo "</tr>";
        $sn++;
    }
    fclose($file);
} else {
    echo "<tr><td colspan='5'>No results found.</td></tr>";
}
$conn->close();
?>
</tbody>
</table>
