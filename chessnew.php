<style>
	.white{
		background-color: white;
	}
	.black{
		background-color: black;
	}
</style>
<?php
echo"<table border=1 cellspacing=0 cellpadding='10'>";
for($i=1;$i<=8;$i++){
echo"<tr>";
for($j=1;$j<=8;$j++){
$class=($i+$j)%2==0?'white':'black';
	
	
		echo "<td  class='$class'></td>";
	}

echo"</tr>";
}
echo"</table>";
?>