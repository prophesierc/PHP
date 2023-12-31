<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    class Movie
    {
        //getter/setter functions only needed when pruivate variables need to be accessed
        public $title;
        private $rating; // $rating can only be access inside Movei class

        public function __construct($title, $rating)
        {
            $this->title = $title;
            //every $rating will now feed through the setRating() instead
            $this->setRating($rating);
        }
        public function getRating()
        //simply returns the rating
        //this will call the current instance's $rating value and allow it to be read from outside the class
        {
            //$rating is private to allow strict access control - a function needs to be created (Getter / getRating) to allow read only return of the value outside of the class
            return $this->rating;
        }
        public function setRating($rating)
            //simply sets the rating attribute
            //this will call the current instance's $rating value and allow it to be edited from outside the class due to privacy
        {
            //$rating is private to allow strict access control - a function needs to be created (Setter / setRating) to allow editing of the $rating attribute outside of the class
            //$this->rating = $rating;
            //Access Control->
            $APPROVED_RATINGS = array('G', 'PG', 'PG-13', 'R'); // string
            // return instance's rating if $rating is a substring of approved ratings within an array, then implodes it or returns false if not a substring
            return str_contains(implode($APPROVED_RATINGS), $rating) ? $rating : 'NR'; //this works??nice
            //$this->rating = $rating;
        }
    }
    $Avengers = new Movie('Avengers', 'PG-13');
    $Avengers2 = new Movie('Avengers', 'PG-13');
        //$rating = G, PG, PG-13, R, NR
    echo $Avengers->setRating('M') . '<br>';
    echo $Avengers2->setRating('R');
    //echo $Avengers->getRating();
    ?>
</body>
</html>