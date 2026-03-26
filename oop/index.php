<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>OOP</title>
</head>
<body>
    <?php
    require_once "classes/Car.php";
    $car1 = new Car("volvo", "xc90");
    //echo $car1->brand;
    echo $car1->getBrand();
    echo "<br>";
    echo $car1->vehicleType;
    echo "<br>";
    echo $car1->getCarInfo();
    echo "<br>";
    $car1->setBrand("bmw");
    echo $car1->getBrand();
    ?>
</body>
</html>