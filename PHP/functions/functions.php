<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    

    <?php   
    function sayHi($name, $age){
        echo "My name is $name, and I am $age years old";
    }
    //sayHi('Brian', 25);
    ?>

    <?php
    function cubed($num){
        return $num**3;
    }
    echo cubed(5);
    ?>
</body>
</html>