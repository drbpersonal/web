<?php
class Rectangle{
	public $length;
	public $breadth;
	public function __construct($l,$b){
		$this->length=$l;
		$this->breadth=$b;
	}
	public function computeArea(){
		 return $this->length*$this->breadth;
	}
	public function displayArea(){
		echo "The area is:".$this->computeArea()."<br>";
	}
}
$obj1= new Rectangle(20,3);
$area1=$obj1->computeArea();
$obj1->displayArea();
$obj2= new Rectangle(12,8);
$area2=$obj2->computeArea();
$obj2->displayArea();
/*if($area1()>$area2{
	$obj1->displayArea();
}
else{
	$obj2->displayArea();
}
*/
echo "Larger area is"." ".max($area1,$area2);

?>