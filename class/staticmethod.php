<!-- static method -->
<?php
class student{
	public static function displayName(){
	echo"The name is John"."<br>";
	}
}
student::displayName();
?>
<!-- Static Property -->
<?php
class students{
	public static $name="Dinesh";
}
echo students::$name;
?>