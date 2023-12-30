<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    class Student
    {
        public $name;
        public $major;
        public $gpa;

        public function __construct($name, $major, $gpa)
        {
            $this->name = $name;
            $this->major = $major;
            $this->gpa = $gpa;
        }
        public function hasHonors()
        {
            if ($this->gpa >= 3.4) 
            {
                return 'true';
            }
            return 'false';
        }
    }
    $Charlie = new Student('Charlie Daniels', 'Comp Sci', 3.4);
    $Randy = new Student('Randy Marsh', 'Literature', 3.3);
    echo $Charlie->hasHonors();
    echo '<br>';
    echo $Randy->hasHonors();
    ?>
</body>
</html>