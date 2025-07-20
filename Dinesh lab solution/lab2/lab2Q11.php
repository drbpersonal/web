<?php
for ($n = 10; $n <= 25; $n++) {
    $isPrime = true;
    for ($i = 2; $i < $n; $i++) {
        if ($n % $i == 0) {
            $isPrime = false;
            break;
        }
    }
    if ($isPrime && $n > 1) {
        echo "$n ";
    }
}
?>
