<?php
function checkprime($che){
	if($che<2){
		return false;
	}
	for($i=2;$i<$che;$i++){
		if($che%$i==0){
			return false;
		}
	}
	return true;

}
function addprime(){
	$sum=0;
	for($i=2;$i<=20;$i++){
		if(checkprime($i)){
			$sum=$sum+$i;
		}
	}
		return $sum;
}
echo"sum of Prime num upto 20 is:".addprime();
?>