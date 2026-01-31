<?php
$student=["Ram"=>20,"Shyam"=>21,"Hari"=>22,"Gita"=>19,"Sita"=>18,"Rita"=>23,"Bishal"=>24];
echo"<table border='1'>";
echo"<tr><th>Name</th><th>Age</th></tr>";
for($i=0;$i<count($student);$i++){
	$keys=array_keys($student);
	echo"<tr><td>".$keys[$i]."</td><td>".$student[$keys[$i]]."</td></tr>";
}
echo"</table><br>";

echo"<table border='1'>";
echo"<tr><th>Name</th><th>Age</th></tr>";
foreach($student as $key=>$value){
	echo"<tr><td>$key</td><td>$value</td></tr>";
}
echo"</table>";
?>
