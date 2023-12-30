<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php   
        function gender($isMale, $isFemale){
        if ($isMale & !$isFemale) {
            echo 'You are male';
        } 
        else if ($isFemale & !$isMale) {
            echo 'You are female';
        }
        else if ($isFemale & $isMale) {
            echo 'You are hermaphroditic';
        }
        else 
        {
            echo 'You are asexual';
        }
    }
    gender(false, false);
    ?>
</body>
</html>