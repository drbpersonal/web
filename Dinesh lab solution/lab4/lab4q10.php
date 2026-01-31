<?php
$num=[5,10,15,20];
$max=max($num);
echo"Prime numbers up to $max are:<br>";
for($i=2;$i<=$max;$i++){
	$count=0;
	for($j=1;$j<=$i;$j++){
		if($i%$j==0){
			$count++;
		}
	}
	if($count==2){
		echo$i."<br>";
	}
}
?>
