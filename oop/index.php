<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>OOP</title>
</head>
<body>
    <?php
    $brand= "volvo";
    $model= "xc90";

    function getCarInfo($brand, $model){
        return "The car is " . $brand . " " . $model;
    }
    echo getCarInfo($brand, $model);
    ?>
</body>
</html>