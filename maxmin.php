<?php
$arr=array(10,5,75,75,15,75);
$max=$arr[0];
$min=$arr[0];
$selmax=$min;

foreach ($arr as $value) {
    if ($value>$max){
        $selmax=$max;
        $max = $value;
    } elseif($value>$selmax && $value<$max) {
        $selmax=$value;
    }
    if ($value<$min) {
        $min=$value;
    }
}
echo "Maximum:$max<br>";
echo "Second Maximum:$selmax<br>";
echo "Minimum:$min<br>";
?>
