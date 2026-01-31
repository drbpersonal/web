<?php
include'conn.php';
$sql="SELECT * FROM STUDENT";
$result=$conn->query($sql);
if($result->num_rows>0){
    echo "<table border='1'>
    <tr>
    <th>Name</th>
    <th>Address</th>
    <th>Roll</th>
    </tr>";
    while($row=$result->fetch_assoc()){
        echo "<tr>
        <td>".$row['NAME']."</td>
        <td>".$row['ADDRESS']."</td>
        <td>".$row['ROLL']."</td>
        </tr>";
    }
    echo "</table>";
} else {
    echo "0 results";
}
if ($result===true){
    echo "saved";
}
else {
    echo"failed";
}
?>