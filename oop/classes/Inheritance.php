<?php
class Fruit
{
    public $name;
    public $color;
    public function __construct($name, $color)
    {
        $this->name = $name;
        $this->color = $color;
    }
    public function details(){
        echo "this is $this->name and the color is $this->color";
    }

}
class Strawberry extends Fruit
{
    public function message(){
        echo "i am testing this part";
    }
}

$strawberry = new Strawberry("Strawberry", "blue");
$strawberry->message();
$strawberry->details();