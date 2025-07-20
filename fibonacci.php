<?php
$a=0;
$b=1;
echo $a."<br>";
echo $b."<br>";
for ($i=3;$i<= 8;$i++){
    $c=$a+$b;
    echo $c . "<br>";
    $a=$b;
    $b=$c;
}
?>

<?php
function fibo($a,$b,$count) {
    if ($count==0) {
        return;
    }
    echo $a."<br>";
    fibo($b,$a+$b,$count-1);
}

fibo(0,1,8);
?>

