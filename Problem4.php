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
}

class Bus extends Vehicle {
    public function seating_capacity($capacity = 50) {
        return $capacity;
    }

    public function displayDetails() {
        echo "Vehicle Name: " . $this->name . "\n";
        echo "Speed: " . $this->speed . " km/h\n";
        echo "Mileage: " . $this->mileage . " km\n";
        echo "Seating Capacity: " . $this->seating_capacity() . "\n";
    }
}

$bus = new Bus("Bus", 90, 5000);
$bus->displayDetails();
?>
