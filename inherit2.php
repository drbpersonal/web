<?php
class Person{
	public $name;
	public function setName($nm){
		$this->name=$nm;
	}
}
class Employee extends person{
	public $EmpId;
}
class Manager extends Employee{
	public $department;
	public function setEid($epi){
		$this->EmpId=$epi;
	}
	public function setDep($dep){
		$this->department=$dep;
	}
	public function display(){
		echo "Name:".$this->name ."<br>";
		echo "EmpId:".$this->EmpId ."<br>";
		echo "department:".$this->department;
	}
}
$obj= new Manager();
$obj->setName("monika");
$obj->setEid(101);
$obj->setDep("networking");
$obj->display();
?>