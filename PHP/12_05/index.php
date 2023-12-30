<?php 
#[AllowDynamicProperties]
Class Persona 
{	
	function persona($name)
	{
		return 'Hello, ' . $this->name = $name . '!';
	}			
}
$brian = new Persona();
echo $brian->persona("Brian");

#[AllowDynamicProperties]
Class Deprecated
{
	private int $uid;
}
$user = new Deprecated();
echo '<br>';
echo $user->name = 'Bar';
//deprecate dynamic propery

#[AllowDynamicProperties]
Class Deprecated_2
{
	public function __construct()
	{
		$this->name = 'Foo';
	}		
}
echo '<br>';
$object = new Deprecated_2();
$object->name;

#[AllowDynamicProperties]
Class ExtendedDeprecated_2 extends Deprecated_2 
{
	public function __construct()
	{
		parent::__construct();
		$this->extended = 'Bar';
	}
}
$object = new ExtendedDeprecated_2();

echo '<br>';
echo $object->name . ' ' . $object->extended;

echo '<br>';
echo '<br>';
include 'index2.php';
?>