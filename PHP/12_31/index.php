<?php 
class Phone
{
    public string $brand;
    public int $camera;
    public int $ram;
    public int $storage;

    public function __construct(string $brand, int $camera, int $ram, int $storage)
    {
        //maps public var to object reference
        $this->brand = $brand;
        $this->camera = $camera;
        $this->ram = $ram;
        $this->storage = $storage;
    }
}
$s21 = new Phone('Samsung', 24, 8, 128);
echo $s21->brand;
echo '<br>';
class MapCoordinates
{
    //constructor promotion allows you to initialize private variables insude the constructor parameter
    public function __construct(private int $x, private int $y) {
        //$this->$x = x is no longer needed with constructor promotion
        // constructors interate automatically betweem each object created
    }
    public function getMapCoordinates()
    {
        return "({$this->x}, {$this->y})";
    }
}
$Sweden = new MapCoordinates(5, 4);
echo $Sweden->getMapCoordinates();
echo '<br>';

class Mug
{
    public function __construct(private int $price, private string $color) 
    {
    }
    public function sales()
    {
        return "This {$this->color} mug is \${$this->price}";
    }
}
$MarkiplierMug = new Mug(20, 'black');
echo $MarkiplierMug->sales();
?>