<?php
$name="Hello";
$roll=1;
$age='12';
echo "$roll";
echo $name;
echo $name,$roll;
echo gettype($age);
?>

<?php
$college= "Nepal Commerce College" ;
echo strlen($college);
echo"<pre>";
echo"Before trim <br>";
echo $college."<br>";
echo"After trim <br>";
echo  trim($college);
echo str_replace("College","campus",$college)."<br>";
$text="hellO world";
echo ucwords($text)."<br>";
echo ucfirst($text)."<br";
echo strtoupper($text)."<br>";
echo stripos($text,'o')."<br>";
echo strrpos($text,"o")."<br>";
$text1="HELLO WORLD";
echo strcmp($text,$text1)."<br>";
echo strcasecmp($text,$text1)."<br>";

echo strrev($text);
?>
<?php
$name= 'Dinesh Raii Bhandari';
echo strlen($name);
echo"<pre>";
echo"Before trim <br>";
echo $name."<br>";
echo "after trim <br>";
echo trim($name);
echo str_replace("Raii","Raj",$name)."<br>";
$text="hello world";
echo ucwords($text)."<br>";
?>

<?php
$n=12;
if ($n%2==0) {
	echo(" num is even <br>");
}
else{
	echo("odd");
}
?>

<?php
for($i=1;$i<20;$i++) {
if($i%2!=0)
{
	echo $i."";
}
}
?>

<?php
$n=11;
if($n<=1){
	echo("Num is prime<br>");
}
else 
for($i=2;$i<=$n/2;$i++) 
{
if($n%$i==0){

}
}
?>


<?php
echo"<table border=1 cell spacing=0 cell padding=0>";
for($i=1;$i<=8;$i++){
echo"<tr>";

for($j=1;$j<=8;$j++){
	if($i%2==0){
	echo"<td height=40px width=20px bgcolor=black>a</td>";
	$i++;
	}
	else{
		echo "<td height=40px width=20px bgcolor=white>a</td>";
		$i++;
	}
}
echo"</tr>";
}
echo"</table>";
?>