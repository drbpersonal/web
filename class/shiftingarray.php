<?php
$fruits=["Apple","Banana","Mango","Pineapple","Grapes","Orange","Litchi"];
echo"<pre>";
echo"Before shifting<br>";
print_r($fruits);
echo"After UnShifting<br>";
array_unshift($fruits,"Kiwi");
print_r($fruits);
array_shift($fruits);
echo"After shifting<br>";
print_r($fruits);
array_pop($fruits);
echo"After Pop<br>";
print_r($fruits);
array_push($fruits,"Strawberry","Peach");
echo"After Push<br>";
print_r($fruits);
?>
<?php

function searcharr($arr,$svalue){
	foreach($arr as $value){
		if($svalue===$value){
			return true;
		}
	
	}
}
$infom=["Apple","Kathmandu","Baneshwor",1,3,6];
$data=searcharr($infom,6);
if($data)
	{
		echo"found";
	}?>

<?php
function searcha($arr,$svalue){
	if(array_key_exists($svalue,$arr)){
		echo "found";
	}
	else{
		echo"not found";
	}
}
$infom=["Apple","Kathmandu","Baneshwor",1,3,6];
searcha($infom,6"<br>"h);
searcha($infom,13);
?>