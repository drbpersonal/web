<?php
abstract class shape{
	abstract public function calculateArea();
}
class rectangle extends shape{
	public $length;
	public $breadth;
public function __construct($length,$breadth){
	$this->length=$length;
	$this->breadth=$breadth;
}
public function calculateArea(){
return $this->length*$this->breadth;
}}
class circle extends shape{
	public $radius;
	public function __construct($radius) {
	$this->radius=$radius;
}
public function calculateArea() {
  return pi() * pow($this->radius, 2);
    }
}
$rectangle = new Rectangle(5, 10);
echo"The area of rectangular is".$rectangle->calculateArea()."<br>";
$circle = new Circle(7);
echo"The area of circle is:".$circle->calculateArea();
?>