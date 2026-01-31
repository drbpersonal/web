<?php
$arr=[5,9,3,15,7];
$max=$arr[0];
for($i=1;$i<count($arr);$i++){
	if($arr[$i]>$max){
		$max=$arr[$i];
	}
}
echo"Largest (for loop): $max<br>";

$max2=$arr[0];
foreach($arr as $v){
	if($v>$max2){
		$max2=$v;
	}
}
echo"Largest (foreach): $max2";
?>
