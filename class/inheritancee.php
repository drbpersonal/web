<?php
class lengthConverter{
	public $km;
	public function __construct($kms){
		$this->km=$kms;
	}
	public function kmtom(){
		echo $this->km*1000 ."m<br>";
	}
	public function kmtocm(){
		echo $this->km*100000 ."cm"."<br>";
	}
	
}
class convert extends lengthConverter{
		public function kmtoin(){
		echo $this->km*39370.78 ."in"."<br>";
	}
	public function kmtoft(){
		echo $this->km*3280.839 ."ft"."<br>";
	}
}
$obj=new convert(1);
$obj->kmtom();
$obj->kmtocm();
$obj->kmtoin();
$obj->kmtoft();

?>