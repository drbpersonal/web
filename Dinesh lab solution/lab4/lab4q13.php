<?php
$arr=[
[1,5,7],
[2,8,3],
[9,4,6]
];
$max=0;
foreach($arr as $row){
	foreach($row as $value){
		if($value>$max){
			$max=$value;
		}
	}
}
echo"Largest value is $max";
?>
