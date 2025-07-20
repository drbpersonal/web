<?php
$a = 5;
function test(){
    global $a;
    static $b = 1;
    $a++;
    $b++;
    echo $a . "-" . $b;
}
test();
?>
