<?php
$a=[1,2,3,4,5];
$b=[6,7,8,9,10];
$sum=0;
for($i=0;$i<count($a);$i++){
	$sum=$sum+$a[$i]+$b[$i];
}
echo"Sum of all numbers: ".$sum;
?>
