<?php
function fact($n){
    $f=1;
    for($i=1;$i<=$n;$i++) $f*=$i;
    echo "Factorial: $f<br>";
}

function isPalindrome($n){
    $r=0;
    $t=$n;
    while($n>0){
        $d=$n%10;
        $r=$r*10+$d;
        $n=(int)($n/10);
    }
    echo $t==$r ? "Palindrome<br>" : "Not Palindrome<br>";
}

function isArmstrong($n){
    $t=$n;
    $s=0;
    while($n>0){
        $d=$n%10;
        $s+=$d*$d*$d;
        $n=(int)($n/10);
    }
    echo $t==$s ? "Armstrong<br>" : "Not Armstrong<br>";
}

function isPerfect($n){
    $s=0;
    for($i=1;$i<$n;$i++) if($n%$i==0) $s+=$i;
    echo $s==$n ? "Perfect<br>" : "Not Perfect<br>";
}

function isPrime($n){
    $c=0;
    for($i=1;$i<=$n;$i++) if($n%$i==0) $c++;
    echo $c==2 ? "Prime<br>" : "Not Prime<br>";
}

function primeRange($a,$b){
    for($i=$a;$i<=$b;$i++){
        $c=0;
        for($j=1;$j<=$i;$j++) if($i%$j==0) $c++;
        if($c==2) echo "$i ";
    }
    echo "<br>";
}

function sumPrimes($n){
    $s=0;
    for($i=2;$i<=$n;$i++){
        $c=0;
        for($j=1;$j<=$i;$j++) if($i%$j==0) $c++;
        if($c==2) $s+=$i;
    }
    echo "Sum of primes: $s<br>";
}

function reverseNum($n){
    $r=0;
    while($n>0){
        $d=$n%10;
        $r=$r*10+$d;
        $n=(int)($n/10);
    }
    echo "Reversed: $r<br>";
}

fact(10);
isPalindrome(153);
isArmstrong(153);
isPerfect(496);
isPrime(17);
primeRange(10,25);
sumPrimes(20);
reverseNum(135711);
?>
