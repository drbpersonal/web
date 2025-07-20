<?php
// Sample associative multidimensional array
$data = [
    ["name" => "John Doe", "age" => 28, "city" => "New York"],
    ["name" => "Jane Smith", "age" => 34, "city" => "Los Angeles"],
    ["name" => "Sam Brown", "age" => 23, "city" => "Chicago"]
];

// Start the table
echo "<table border='1' cellpadding='5' cellspacing='0'>";
echo "<tr><th>Name</th><th>Age</th><th>City</th></tr>";

// Loop through the array
foreach ($data as $row) {
    echo "<tr>";
    foreach ($row as $value) {
        echo "<td>" . htmlspecialchars($value) . "</td>";
    }
    echo "</tr>";
}

// End the table
echo "</table>";
?>

