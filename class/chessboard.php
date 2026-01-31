<?php
echo"<table border=1 cellspacing=0 cellpadding='10'>";
for($i=1;$i<=8;$i++){
echo"<tr>";
for($j=1;$j<=8;$j++){
	if(($i+$j)%2==0){
	echo"<td  bgcolor=black></td>";
	}
	else{
		echo "<td  bgcolor=white></td>";
	}
}
echo"</tr>";
}
echo"</table>";
?>