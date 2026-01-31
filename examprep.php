<!--?php 
$colors=array("red","green");
foreach($colors as $color)
{
    echo $color ."<br>";
}
?>
-->
<?php
function averageAge($age){
    $total=0;
    $count=count($age);
    foreach($age as $sum){
        $total += $sum;
    }
        return $total/$count;
}
$age=[10,20,40,50,80];
echo"The average age is".averageAge($age);
?>