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
echo "this is ".$fruit->name;
echo "<br>";
echo "color is " .$fruit->color;