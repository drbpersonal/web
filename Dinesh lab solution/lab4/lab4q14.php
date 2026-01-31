<?php
$arr=["Apple","Banana","Mango","Orange"];
echo"Total elements: ".count($arr)."<br>";

$new=array_pad($arr,7,"Empty");
print_r($new);
echo"<br>";

if(in_array("Banana",$arr)){
	echo"Found<br>";
}

unset($arr[2]);
print_r($arr);
echo"<br>";

$search=array_search("Orange",$arr);
echo"Orange found at index $search<br>";

if(array_key_exists(1,$arr)){
	echo"Key 1 exists<br>";
}

$join=implode(",",$arr);
echo"After implode: $join<br>";

$explode=explode(",",$join);
print_r($explode);
?>
