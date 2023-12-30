<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <p>hmtl test</p>
    <?php echo 'php test'; ?>
    <hr>

    <form action='index.php' method='get'>
        <!-- correlate input name to $_GET['name'] -->
        Name: <br><input type='text' name='name'><br>
        Age:  <br><input type="number" name='age'><br>
        <input type='submit'>
        <!--$_GET returns index.php?name='user_name'-->
    </form>
    <br>

    

    <?php     
        $name = $_GET['name'];
        $age = $_GET['age'];
        echo 'My name is: ' . $name . '<br>';
        echo 'My age is: ';
        if ($age <= 0 and $age != null) {
        echo $age = ' Fetus';
        } else {
            echo $age;
        }
    ?>
</body>

</html>