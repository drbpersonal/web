<?php
function daysofweek($days){
switch($days){
	case 1:
	echo 'Sunday';
	break;
	case 2:
	echo 'Monday';
	break;
	case 3:
	echo 'Tuesday';
	break;
	case 4:
	echo 'Wednesday';
	break;
	case 5:
	echo 'Thursday';
	break;
	case 6:
	echo 'Friday';
	break;
	case 7:
	echo 'Saturday';
	break;
	default:
	echo 'Enter number between 1 to 7';
}
}
daysofweek(5);
?>