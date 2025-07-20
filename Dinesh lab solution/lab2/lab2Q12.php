<?php
$sum = 0;
for ($n = 2; $n <= 20; $n++) {
    $isPrime = true;
    for ($i = 2; $i < $n; $i++) {
        if ($n % $i == 0) {
            $isPrime = false;
            break;
        }
    }
    if ($isPrime) {
        $sum += $n;
    }
}
echo "Sum = $sum";
?>
