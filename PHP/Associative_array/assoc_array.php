<!DOCTYPE html>

<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title></title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="">
    </head>
    <body>

    <form action="assoc_array.php" method="post">
        Grades: <input type="text" name="student" ><br>
        <input type="submit">
    </form>
    <?php 
    //Similar to a dictionary. Creates a key=>value pair
    $grades = array('Jim'=>'A+', 'Pam'=>'B+', 'Oscar'=>'C-');

    //returns value of key pair from textbox
    echo $grades[$_POST['student']];

    //built-in count method
    //echo count($grades);


    ?>
    </body>
</html>