<?php
class students{
	public $first_name;
	public $last_name;

	public function setName($fname,$lname){
		$this->first_name=$fname;
		$this->last_name=$lname;
	}
	public function getName(){
		echo $this->first_name;
		echo $this->last_name;

	}
}
$obj=new students();
$obj->setName("Dinesh","Bhandari");
$obj->getName();
$obj1=new students();
$obj1->setName("Shyam","");
$obj1->getName();
?>