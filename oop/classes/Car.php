<?php
class Car {
    //properties
    private $brand;
    private $model;
    public $vehicleType = "car";

    //constructor
    public function __construct($brand, $model){
        $this->brand = $brand;
        $this->model = $model;
    }

    //getter and setter
    public function getBrand(){
        return $this->brand;
    }

    public function setBrand($brand){
        $this-> brand = $brand;
    }
    
    //method
    public function getCarInfo(){
        return $this->brand . " " . $this->model;
    }
}
