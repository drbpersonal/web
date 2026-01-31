<?php
$arr=[5,9,3,15,7];
$max=$arr[0];
$second=0;
for($i=0;$i<count($arr);$i++){
	if($arr[$i]>$max){
		$second=$max;
		$max=$arr[$i];
	}elseif($arr[$i]>$second && $arr[$i]!=$max){
		$second=$arr[$i];
	}
}
echo"Max: $max<br>Second Max: $second<br>";

$max2=$second2=0;
foreach($arr as $v){
	if($v>$max2){
		$second2=$max2;
		$max2=$v;
	}elseif($v>$second2 && $v!=$max2){
		$second2=$v;
	}
}
echo"Max (foreach): $max2<br>Second Max (foreach): $second2";
?>
