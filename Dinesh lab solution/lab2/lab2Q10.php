<?php
$num = 17;
$isPrime = true;
for ($i = 2; $i < $num; $i++) {
    if ($num % $i == 0) {
        $isPrime = false;
        break;
    }
}
if ($isPrime) {
    echo "Prime";
} else {
    echo "Not Prime";
}
?>
