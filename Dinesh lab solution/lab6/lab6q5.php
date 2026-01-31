<?php
echo date("h:i:sa F d Y", strtotime("08:00:00pm March 09 2021"));
echo "<br>";

echo "Next Saturday: ";
echo date("Y-m-d", strtotime("next Saturday"));
echo "<br>";

echo "Tomorrow: ";
echo date("Y-m-d", strtotime("tomorrow"));
echo "<br>";

echo "After 3 months: ";
echo date("Y-m-d", strtotime("+3 months"));
echo "<br>";

echo "<pre>";
print_r(getdate());
?>
