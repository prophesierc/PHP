<?php
class Fruit {
  public $name; // This is a property to store the name of the fruit

  function set_name($name) {
    $this->name = $name; // This method sets the name of the fruit using $this
// $this is like an object saying, "When I'm talking about my stuff, I'll use $this so everyone knows it's mine." \\
  }
}

$apple = new Fruit(); // Creating a new instance of the Fruit class, like making a new apple
$apple->set_name("apple"); // Setting the name of the apple using the set_name method

echo $apple->name; // Displaying the name of the apple
echo '<br>';
//-------------------------------------\\
class Fruit2 {
//changes value inside of class
  public $name;
}
$bananna = new Fruit();
echo $bananna->name = 'bananna';
echo '<br>';

?>