<?php
$fruits = ["a"=>"Mango", "b"=>"Apple", "c"=>"Orange"];

echo "<pre>Before Sorting:\n";
print_r($fruits);

// 4.3.1 asort()
asort($fruits);
echo "\nAfter asort():\n";
print_r($fruits);

// 4.3.2 arsort()
arsort($fruits);
echo "\nAfter arsort():\n";
print_r($fruits);

// 4.3.3 sort()
sort($fruits);
echo "\nAfter sort():\n";
print_r($fruits);

// 4.3.4 rsort()
rsort($fruits);
echo "\nAfter rsort():\n";
print_r($fruits);

// 4.3.5 ksort()
ksort($fruits);
echo "\nAfter ksort():\n";
print_r($fruits);

// 4.3.6 krsort()
krsort($fruits);
echo "\nAfter krsort():\n";
print_r($fruits);
?>
