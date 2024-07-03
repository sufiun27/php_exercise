<?php
class Car {
    
    function specification($color, $version = null) {
        if ($version === null) {
            echo "Private car {$color};";
        } else {
            echo "Colour {$color} & Version {$version};";
        }
    }

}

$newCar = new Car;
$newCar->specification('red light'); // Output: Private car red light;
$newCar->specification('red light', '10'); // Output: Colour red light & Version 10;

?>
