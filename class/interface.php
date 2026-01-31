<!--Write a PHP program that demonstrates the use of an interface. Define an interface called Payable with a method calculatePayment().Then,create two classes HourlyEmployee and SalariedEmployee that implement the Payable interface.The HourlyEmployee class should calculate payment based on the hourly rate and total hours worked, while the SalariedEmployee should calculate payment based on a fixed monthly salary. Use a constructor to initialize the necessary values in both classes. Finally, create objects of both classes, calculate their payments, and display the result using the interface method-->

<?php
interface payable{
	public function calculatePayment();
}
class hourlyEmploye implements payable{
public $hourlyRate;
public $hourlyWorked;
public function __construct($hourlyRate,$hourlyWorked){
	$this->hourlyRate=$hourlyRate;
	$this->hourlyWorked=$hourlyWorked;
}
public function calculatePayment(){
	return $this->hourlyRate*$this->hourlyWorked;
}}
class salariedEmployee implements payable{
public $fixedmonthSalary;
public function __construct($fixedmonthSalary){
	$this->fixedmonthSalary=$fixedmonthSalary;
}
	public function calculatePayment(){
	return $this->fixedmonthSalary;
}}
$hourlyEmploye = new hourlyEmploye(1, 10000);
echo"The Hourlysalary for 10 hr".$hourlyEmploye->calculatePayment()."<br>";
$salariedEmployee = new salariedEmployee(10000);
echo"The monthly salary is".$salariedEmployee->calculatePayment()."<br>";

?>
