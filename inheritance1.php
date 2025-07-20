<?php
class moneyConverter{
	public $rupees;
	public function __construct($rs){
		$this->rupees=$rs;
	}
}
class converttoPaisa extends moneyConverter{
	public function convert(){
		 echo $this->rupees*100 ."paisa"."<br>";
	}
	public function display(){
		echo $this->rupees;
	}
}
$obj=new converttoPaisa(3);
$obj->convert();
?>