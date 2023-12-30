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

    <form action="array.php" method="post">
        Apples: <input type="checkbox" name="fruits[]" value="Apples"><br>
        Oranges: <input type="checkbox" name="fruits[]" value="Oranges"><br>
        Bananas: <input type="checkbox" name="fruits[]" value="Bananas"><br><br>
        <input type="submit">
    </form>

    <?php 
    $fruits = $_POST["fruits"];
    echo $fruits[0];
    //returns selected checkbox or if Apples is selected
    ?>
    </body>
</html>