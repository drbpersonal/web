<?php
echo "Hello World!"."<br>";
?>
<?php
$text = "  Hello PHP World!  ";
echo "Original: '$text'"."<br>";
echo "Trim: '" . trim($text) . "'<br>";
echo "LTrim: '" . ltrim($text) . "'<br>";
echo "RTrim: '" . rtrim($text) . "'<br>";
echo "Upper: " . strtoupper($text) . "<br>";
echo "Lower: " . strtolower($text) . "<br>";
echo "Substring (7, 3): " . substr($text, 7, 3) . "<br>";
echo "Replace 'PHP' with 'Web': " . str_replace("PHP", "Web",$text) ."<br>";
echo "UC Words: " . ucwords(trim($text)) . "<br>";
echo "Length: " . strlen($text) . "<br>";
echo "Case compare(php,PHP):".strcasecmp("php","PHP") ."<br>";
echo "Case compare (php, PHP): " . strcmp("php", "PHP") ."<br>";
?>

<?php
$name = "Sita";     
$age = 22;              
$height = 5.6;          
$isStudent = true;      
$colors = ["red", "blue"]; 
echo "$name is $age years old and height is $height ft.<br>";
?>
<?php
$msg = "Using echo and print:";
echo $msg, " Hello", " World<br>";
if (print("Printed with print<br>")) {
    echo "Print returned true<br>";
}
?>
