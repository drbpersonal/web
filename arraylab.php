<?php
$data=[1,2,3,"a","NCC"];
echo'pre';
print_r($data);
?>
<?php
$data=[1,2,3,"a","NCC"];
for($i=0;$i<sizeof($data);$i++)
	echo"the value is".$data[$i]."<br>";
?>
<?php
$data=[1,2,3,"a","NCC"];
foreach ($data as $val) {
	echo"the value is".$val."<br>";
}?>
<?php
$data=[1,2,3,"a","NCC"];
foreach ($data as $key => $value) {
	echo"the key is".$key."and the value is ".$value."<br>";
}
?>
<?php
$arr =['sn'=>1,"name"=>'Ram',"roll"=>"3","NCC",2=>'Tu'];
echo"<td>";
foreach($arr as $key => $val) {
	echo"<tr> The key is ".$key."and the value is ".$val."</tr>";
}
echo"</td>";
?>