<?php
$today = time();
$newyear = strtotime("January 1 next year");
$days = ($newyear - $today)/(60*60*24);
echo "Days left: ".floor($days);
?>
