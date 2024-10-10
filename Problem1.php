<?php
class Vehicle {
    public $name;
    public $speed;
    public $mileage;

    public function __construct($name, $speed, $mileage) {
        $this->name = $name;
        $this->speed = $speed;
        $this->mileage = $mileage;
    }

    public function displayDetails() {
        echo "Vehicle Name: " . $this->name . "\n";
        echo "Speed: " . $this->speed . " km/h\n";
        echo "Mileage: " . $this->mileage . " km\n";
    }
}

$car = new Vehicle("Test Car", 90, 1000);
$car->displayDetails();
?>
