<?php
function sum(){
    $a = func_get_args();
    $s = 0;
    foreach($a as $v){
        $s += $v;
    }
    echo $s;
}
sum(1,2,3,4);
?>
