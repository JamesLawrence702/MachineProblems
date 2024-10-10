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

    public function fare($capacity) {
        return $capacity * 100;
    }
}

class Bus extends Vehicle {
    public $capacity;

    public function __construct($name, $speed, $mileage, $capacity = 50) {
        parent::__construct($name, $speed, $mileage);
        $this->capacity = $capacity;
    }

    public function fare($capacity) {
        $totalFare = parent::fare($capacity); 
        $maintenanceCharge = $totalFare * 0.10;
        return $totalFare + $maintenanceCharge; 
    }

    public function displayDetails() {
        echo "Bus Name: " . $this->name . "\n";
        echo "Speed: " . $this->speed . " km/h\n";
        echo "Mileage: " . $this->mileage . " km\n";
        echo "Seating Capacity: " . $this->capacity . "\n";
        echo "Total Fare: " . $this->fare($this->capacity) . "\n";
    }
}

$Bus = new Bus("Bus", 90, 5000);
$Bus->displayDetails();
?>
