<?php
$fruits = ["Apple","Banana","Mango","Pineapple"];
echo "<pre>Before shifting:\n";
print_r($fruits);

array_unshift($fruits,"Kiwi");
echo "\nAfter Unshift:\n";
print_r($fruits);

array_shift($fruits);
echo "\nAfter Shift:\n";
print_r($fruits);

array_push($fruits,"Litchi");
echo "\nAfter Push:\n";
print_r($fruits);

array_pop($fruits);
echo "\nAfter Pop:\n";
print_r($fruits);
?>
