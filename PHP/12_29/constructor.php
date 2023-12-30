<?php
//dynamic object creation
class User {
    public $name;
    public $age;
    public $email;
    private $ssn;

    function __construct($name, $age, $email, $ssn) {
        $this->name = $name;
        $this->age = $age;
        $this->email = $email;
        $this->ssn = $ssn;
    }

    function greet() {
        return 'Hello,  ' . $this->name . ' and welcome to the site!';
    }

    public function getSSN() {
        return $this->ssn;
    }

    private function setSSN($ssn) {
        $this->ssn = $ssn;
    }
}
$user1 = new User('Akanni William', 35, "williamak@ml.com", '123-45-6789');

$user2 = new User('Alabi Brandon', 25, "brandonal@cl.com", '987-65-4321');

echo $user1->name . ' is ' . $user1->age . ' years old.';
echo "<br>";
echo $user1->greet();
echo "<br>";
echo $user1->getSSN();

echo "<br>"; 
echo "<br>";

echo $user2->name . ' is ' . $user2->age . ' years old.';
echo "<br>";
echo $user2->greet();
echo "<br>";
echo $user2->getSSN();
?>