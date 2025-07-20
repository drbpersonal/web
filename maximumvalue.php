<?php
$data=[3,25,1,5,8,9,10];
$max=$data[0];
for($i=1;$i<count($data);$i++)
{
	if($data[$i]>$max)
	{
		$max=$data[$i];
	}
	$num=$data[$i];
	$isprime = true;

	if($num<2){
		$isprime = false;
	}else{
		for($j=2;$j<$num;$j++){
			 if ($num % $j == 0) {
                $isPrime = false;
                break;
            }
		}
	}
	if($isprime){
		echo "Prime Number is:$num<br>";
	}
}
echo "Maximum Number:$max\n";
?>