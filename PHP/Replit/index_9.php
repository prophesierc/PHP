 <?php
//Lesson 8
//Classes
class Car
{
	public $color;
	public $manufacturer;
	public $property1;     // This is a public property
	private $property2;    // This is a private property
	protected $property3;  // This is a protected property
	public $widgetsSold = 123;
	static public $numberSold = 123;
}
echo 'Lesson 8';
echo "<br>";

$beetle = new Car();

//Car Object ( [property1] => [property2:Car:private] => [property3:protected] => )
print_r( $beetle );   // Displays "Car Object ( )"
echo "<br>";
echo "<br>";
echo $beetle->widgetsSold; // returns value of $widgetsSold within $beetle object //123
echo "<br>";
$mustang = new Car();
$mustang->color = "green";
$mustang->manufacturer = "Ford";
echo "<p>The Mustang's manufacturer is " . $mustang->manufacturer . ".</p>";
print_r( $mustang );
echo "<br>";
echo ++Car::$numberSold; // 1 + Car.numberSold == 123 + 1; Prints 124
echo "<br>";

class MyClass
{
	public function hello()
	{
		echo "Hello, World!";
	}
}

$obj = new MyClass;
$obj->hello();  // Displays "Hello, World!"
echo "<br>";

class Vehicle
{

	public static function calcMpg( $miles, $gallons )
	{
		return ( $miles / $gallons );
	}
}

echo Vehicle::calcMpg( 168, 6 ); // Displays "28"
echo "<br>>";

function fun1(Callable $func)
{
   $func();
   return "have fun";
}
class Sample
{
   public function __invoke()
   {
	  echo "Enjoy ";
   }
}
$obj = new Sample();
echo fun1($obj);
echo "<br>";

$p = "This is a very sunny day.";
$q = array_map("strtoupper", explode(" ", $p));
foreach($q as $value)
 {
	 print "$value ";
 }
echo "<br>";


 class Person
 {
	private $_firstName;
	private $_lastName;
	private $_age;

	public function __construct( $firstName, $lastName, $age )
	{
		$this->_firstName = $firstName;
		$this->_lastName = $lastName;
		$this->_age = $age;
	}

	public function showDetails()
	{
	  echo "$this->_firstName $this->_lastName, age $this->_age<br />";
	}
  }

$p = new Person( "William", "Rogers", 35 );
$p->showDetails();  
echo "<br>";

interface foo {}
class_alias('foo', 'bar');
echo interface_exists('bar') ? 'yes' : 'no'; 
echo "<br>";


class A {
  static $word = "hello";
  static function hello() {print static::$word;}
  }
  class B extends A {
  static $word = "bye";
  }
  B::hello();

  echo "<br>";

class number 
 {
	 public $a= 10;
	 public $b=20;
	 private $c=30;
  }
  $numbers = new number();

 foreach($numbers as $var => $value) 
 {
	 echo "$value ";
 }
echo "<br>";

class Demo
   {
	   function fun()
	   {
		   echo 'function called!!!';
	   }
   }
$demo = new Demo(); $demo->fun();

?>