<?php
// 1. Numeric Array
$num = [10, 20, 30, 40];
echo "<pre>Numeric Array:\n";
print_r($num);

// 2. Associative Array
$student = ["name"=>"Sravan", "roll"=>12, "college"=>"XYZ"];
echo "\nAssociative Array:\n";
print_r($student);

// 3. Multidimensional Array
$marks = [
  ["Math"=>80, "Science"=>90],
  ["Math"=>85, "Science"=>88]
];
echo "\nMultidimensional Array:\n";
print_r($marks);

// 4. Multidimensional Index Array
$multi = [
  [1,2,3],
  [4,5,6],
  [7,8,9]
];
echo "\nMultidimensional Index Array:\n";
print_r($multi);

// 5. Multidimensional Associative Array
$info = [
  "Student1"=>["Name"=>"Ram", "Roll"=>1],
  "Student2"=>["Name"=>"Hari", "Roll"=>2]
];
echo "\nMultidimensional Associative Array:\n";
print_r($info);
?>
