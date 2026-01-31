<?php
function searchCountry($countries,$search){
	foreach($countries as $c){
		if($c==$search){
			return true;
		}
	}
	return false;
}
$list=["Nepal","India","China","Japan","Korea"];
if(searchCountry ($list,"Nepal")){
	echo"Found";
}else{
	echo"Not Found";
}
?>
