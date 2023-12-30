<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    class Chef 
    {
        public function makeChicken()
        {
            echo 'The chef makes chicken <br>';
        }
        public function makeSalad()
        {
            echo 'The chef makes salad <br>';
        }
        public function makeSpecialDish()
        {
            echo 'The chef makes bbq <br>';
        }
    }
    class ItalianChef extends Chef
    {
        public function makePasta()
        {
            echo 'The Italian chef makes pasta';
        }
    }
    
    $chef = new Chef();
    $chef->makeChicken();

    $Boyardee = new ItalianChef();
    $Boyardee->makeSalad();
    $Boyardee->makePasta();
    ?>
</body>
</html>