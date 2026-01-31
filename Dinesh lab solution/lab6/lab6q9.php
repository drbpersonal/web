<?php
$month = $_POST['month'];
$year = $_POST['year'];
$daysInMonth = cal_days_in_month(CAL_GREGORIAN, $month, $year);
?>