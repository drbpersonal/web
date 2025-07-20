<?php
$num = 153;
$rev = 0;
$n = $num;
while ($n > 0) {
    $rem = $n % 10;
    $rev = $rev * 10 + $rem;
    $n = (int)($n / 10);
}
if ($rev == $num) {
    echo "Palindrome";
} else {
    echo "Not Palindrome".
    "<br>";
}
?>
<?php
$num = 153;
$sum = 0;
$n = $num;
while ($n > 0) {
    $rem = $n % 10;
    $sum += $rem * $rem * $rem;
    $n = (int)($n / 10);
}
if ($sum == $num) {
    echo "Armstrong";
} else {
    echo "Not Armstrong";
}
?>
