<?php
class Vehicle {
    public static $wheels = 4;
}

class Bus extends Vehicle {
}

class Car extends Vehicle {
}

echo "Bus: " . Bus::$wheels . " wheels\n";
echo "Car:" . Car::$wheels . " wheels\n";
?>
