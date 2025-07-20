<?php
$a = 0;
$b = 1;
echo "$a $b ";
for ($i = 1; $i <= 3; $i++) {
    $c = $a + $b;
    echo "$c ";
    $a = $b;
    $b = $c;
}
?>
