<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="madlibs.php" method="get">
    Color: <br><input type="text" name="Color"><br>
    Plural Noun: <br><input type="text" name="Plural_Noun"><br>
    Celebrity: <br><input type="text" name="Celebrity"><br>
        <input type="submit">
    </form>
    <br>

    <?php 
    $Color = $_GET["Color"];
    $Plural_Noun = $_GET["Plural_Noun"];
    $Celebrity = $_GET["Celebrity"];
        echo "Roses are {$Color} <br>";
        echo "{$Plural_Noun} are blue <br>";
        echo "I love {$Celebrity} <br>";
    ?>
</body>
</html>