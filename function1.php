<?php
$a=10;
function add($x){
	global $a;//we must have de
	$y=$x+$a;
	echo $y."<br>";
}
add(10);
add(20);
add(30);
?>
<?php
function staticadd()
{
	static $x=10;
	echo $x;
	$x++;
}
staticadd();
staticadd();
staticadd();
staticadd();
staticadd();
?>
<?php
$color="blue";
function getColor($data){
	echo"The color is".$data;
}
getColor($color);
?>