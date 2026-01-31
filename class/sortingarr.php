<?php
$uni=["name"=>"Tribhuwan","id"=>5,"address"=>"kritipur","unicode"=>212,56];
echo"<pre>";
echo"Before Sorting<br>";
print_r($uni);
echo"After Sorting<br>";
sort($uni);
print_r($uni);
?>
<?php
$uni=["name"=>"Tribhuwan","id"=>5,"address"=>"Kritipur","unicode"=>212,56];
echo"<pre>";
echo"Before Sorting<br>";
print_r($uni);
echo"After Sorting<br>";
asort($uni);
print_r($uni);
?>
<?php
$uni=["name"=>"Tribhuwan","id"=>5,"address"=>"Kritipur","unicode"=>212,56,"rT"];
echo"<pre>";
echo"Before Sorting<br>";
print_r($uni);
echo"After Sorting<br>";
ksort($uni);
print_r($uni);
?>
