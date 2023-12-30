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
            public $isbn;
            public $title;
            public $author;
            public $pages;

            function __construct($ISBN, $Title, $Author, $Pages)
            //executes for each object created
            //because this function executes FOR EACH object - it can be used to create specific  objects with
            {
                //because constrcutor iterates each object $this refers to each iteration
                //this public variable is equal to this instance's attribute
                $this->isbn = $ISBN;
                $this->title = $Title;
                $this->author = $Author;
                $this->pages = $Pages;
            }
        }
        $dragons_of_eden = new Book(9780307801005, 'The Dragons of Eden: Speculations on the Evolution of Human Intelligence', 'Carl Sagan', 288);

        //Book object -> instance of Book class
        //taking these attributes and assigning them to the constructor
        /*$dragons_of_eden = new Book();
        $dragons_of_eden->isbn = 9780307801005;
        $dragons_of_eden->title = 'The Dragons of Eden: Speculations on the Evolution of Human Intelligence';
        $dragons_of_eden->author = 'Carl Sagan';
        $dragons_of_eden->pages = 288;*/
        $cosmos = new Book(9781299043787, 'Cosmos', 'Carl Sagan', 432);
        /*$cosmos = new Book();
        $cosmos->isbn = 9781299043787;
        $cosmos->title = 'Cosmos';
        $cosmos->author = 'Carl Sagan';
        $cosmos->pages = 432;
        //echo $dragons_of_eden->title . ' and ' . $cosmos->title . ' are my two favorite books';
        */
        echo $cosmos->pages;
    ?>
</body>
</html>