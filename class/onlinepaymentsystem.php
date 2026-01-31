<!--Design a simple online payment system using object-oriented programming. Begin by creating an abstract class `Payment` with an abstract method `processPayment()` and a concrete method `generateReceipt()` that prints "Receipt generated." Add a static method `getPaymentGateway()` to this class that prints "Connecting to Payment Gateway..." Next, define an interface `Discountable` with a method `applyDiscount(amount)`. Create two subclasses, `CardPayment` and `UPIPayment`, both extending `Payment` and implementing `Discountable`. The `CardPayment` class should have a constructor that accepts `amount`, apply a 10% discount in `applyDiscount()`, and implement the `processPayment()` method. Similarly, the `UPIPayment` class should apply a 5% discount and define its own `processPayment()` method. Demonstrate polymorphism by storing objects of `CardPayment` and `UPIPayment` in a `Payment` type reference and invoking the `processPayment()` and `applyDiscount()` methods. Also, show how the static method `getPaymentGateway()` can be called without instantiating the class.-->
<?php
abstract class payment{
	public function generateReceipt(){
	 	echo"Receipt generated"."<br>";
	 }
	public static function getPaymentGateway(){
	    echo"Connecting to Payment Gateway..."."<br>";
     }
	 abstract public function processPayment();
	 }
interface discountable{
	public function applyDiscount($amt);
    }
    class cardPayment extends payment implements discountable{
	public $amount;
	public function __construct($amt){
		$this->amount=$amt;
	}
    public function applyDiscount(){
    	$this->amount=$amount-($this->amount*0.1);
    	echo" The amount after 10% discount is :".$this->amount."<br>";
    }
    public function processPayment(){
    	echo"Processing Card Payment of Rs."$this->amount;
    }
    }
    class upiPayment extends payment implements discountable{
    public $amount;
	public function __construct($amt){
		$this->amount=$amt;
    }
    public function applyDiscount(){
    	$this->amount=$amount-($this->amount*0.5);
    	echo" The amount after 5% discount is :".$this->amount."<br>";
    }
    public function processPayment(){
    	echo"Processing Card Payment of Rs."$this->amount;
    }
    }
?>
