<?php
echo"question no 2.1"."<br>";
$sum = 0;
for ($i = 1; $i <= 10; $i++) {
    $sum += $i;
}
echo "Sum = $sum"."<br>";
?>
<?php
echo"question no 2.2"."<br>";
$mul = 1;
for ($i = 1; $i <= 10; $i += 2) {
    $mul *= $i;
}
echo "Multiplication = $mul"."<br>";
?>
<?php
echo"question no 2.3"."<br>";
$sum = 0;
for ($i = 2; $i <= 10; $i += 2) {
    $sum += $i;
}
echo "Sum = $sum"."<br>";
?>
<?php
echo"question no 2.4"."<br>";
for ($i = 2; $i <= 50; $i += 2) {
    echo "$i ";
}
?>
<?php
echo"<br>question no 2.5"."<br>";
for ($i = 1; $i <= 5; $i++) {
    if ($i % 2 == 0) {
        echo "$i is Even<br>";
    } else {
        echo "$i is Odd<br>";
    }
}
?>
