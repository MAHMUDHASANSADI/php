<?php
class Fruit {
    public $name;
    public $color;
    public function __construct($name, $color) {
        $this->name = $name;
        $this->color = $color;
    }
}
$fruit = new Fruit("apple", "red");
var_dump($fruit instanceof Fruit);
echo "<br>";
echo "this is ".$fruit->name;
echo "<br>";
echo "color is " .$fruit->color;
echo"<br>";
$color = new Fruit("red", "blue");
var_dump($color instanceof Fruit);
echo "<br>";
echo "color is " .$color->color;