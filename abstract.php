<?php
abstract class person{
	public $name;
	public function __construct($name){
		$this->name=$name;
	}
	 abstract public function displayName();
}
class student extends person{
public function displayName(){
echo $this->name;
}}
$obj= new student("Dinesh");
$obj->displayName();
?>