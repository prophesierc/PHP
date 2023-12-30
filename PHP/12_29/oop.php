<?php
class User {
    public $name = 'John Sanders';
    public $age = 25;
    protected $email = 'jsanders@ml.com';
    private $ssn = '123-45-6789';

    function greet() 
    {
        echo 'Hello,  ' . $this->name . ' and welcome to the site!';
    }

    public function getSSN() 
    {
        return $this->ssn;
    }
//$this is used to access the class properties and methods inside the class, which means you have to use $this->age instead of $age to access the public age property.
    private function setSSN($ssn) 
    {
        $this->ssn = $ssn;
    }
} 
$user = new User;
echo $user->name . ' is ' . $user->age . ' years old.';
echo "<br>";
echo $user->greet();
echo "<br>";
echo $user->getSSN();
echo "<br>";
?>