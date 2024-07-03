<?php
class Car {

    function display() {
        echo "volvo car";
    }

}

class bmw extends car {
    function display() {
        echo "bmw car";
    }
}

$obj = new Car();
//$obj->display(); // Correct way to call the method

$bmwobj = new bmw;
$bmwobj->display();
?>
