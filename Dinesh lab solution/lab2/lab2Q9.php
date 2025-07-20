<?php
$num = 496;
$sum = 0;
for ($i = 1; $i < $num; $i++) {
    if ($num % $i == 0) {
        $sum += $i;
    }
}
if ($sum == $num) {
    echo "Perfect Number";
} else {
    echo "Not Perfect Number";
}
?>
