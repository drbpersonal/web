<?php
function add()
{
$sum=0;
$data = func_get_args();
foreach($data as $data){
	$sum += $data;
}
return $sum;
}
echo add(3,5,8,8,9),"<br>";
echo add(8,9,4);
?>
