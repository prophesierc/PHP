<?php
namespace MyProject\Utilities;

class Calculator {
    public static function add($a, $b) { // add function
        return $a + $b; // return $a + $b
    }
}

namespace MyProject\App;

use MyProject\Utilities\Calculator; // 'use' calls class within Utilities namespace to prevent namespace collisions

echo Calculator::add(10, 5); // '::' is similar to dot notation for calling functions from classes
echo "<br>"
?>