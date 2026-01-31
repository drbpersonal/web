<?php
$d1 = strtotime($_POST['date1']);
$d2 = strtotime($_POST['date2']);
$diff = abs($d2 - $d1)/(60*60*24);
echo "Difference: ".floor($diff)." days";
?>
