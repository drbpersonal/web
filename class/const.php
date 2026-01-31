<?php
class student{
	public $first_name;
	public $last_name;
	public function __construct($fname,$lname){
	$this->first_name=$fname;
	$this->last_name=$lname;
	}
	public function display(){
	echo $this->first_name;
		echo $this->last_name;
	}
}
$obj=new student("Ram","thapa");
$obj->display();
?>