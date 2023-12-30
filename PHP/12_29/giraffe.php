<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    // class is a custom data type to create any type of data type filled with attributes describing that data type
        class Book
        {
            //blueprint of a book (attributes)
            public $ISBN;
            public $title;
            public $author;
            public $pages;

        }
        //Book object -> instance of Book class
        $dragons_of_eden = new Book;
        $dragons_of_eden->ISBN = 9780307801005;
        $dragons_of_eden->title = 'The Dragons of Eden: Speculations on the Evolution of Human Intelligence';
        $dragons_of_eden->author = 'Carl Sagan';
        $dragons_of_eden->pages = 288;

        $cosmos = new Book;
        $cosmos->ISBN = 9781299043787;
        $cosmos->title = 'Cosmos';
        $cosmos->author = 'Carl Sagan';
        $cosmos->pages = 432;
        echo $dragons_of_eden->title . ' and ' . $cosmos->title . ' are my two favorite books';
    ?>
</body>
</html>