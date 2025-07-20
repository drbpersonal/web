<?php
function fibonacci() {
    $a=0;
    $b=1;
    for($i=1;$i<=5;$i++) {
        echo $a." ";
        $c=$a+$b;
        $a=$b;
        $b=$c;
    }
}
fibonacci();
?>
