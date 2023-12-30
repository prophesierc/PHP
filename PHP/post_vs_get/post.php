<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="post.php" method="post">
        Password: <input type="password" name="password"><br>
        <input type="submit">
    </form>

    <?php   
    //use the $_POST variable to retrieve the values of form inputs by their name attribute.
    echo $_POST["password"];
    ?>
</body>
</html>