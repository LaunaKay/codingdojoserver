<?php

class Car
{
    public $price;
    public $speed;
    public $fuel;
    public $mileage;
    public $tax;

    public function __construct($input_price, $input_speed, $input_fuel, $input_mileage)
    {
        $this->price = $input_price;
        $this->speed = $input_speed;
        $this->fuel = $input_fuel;
        $this->mileage = $input_mileage;
        if ($input_price >= 10000)
            $tax = $input_price * 0.15;
        else
            $tax = $input_price * 0.12;
        $this->display_all();
    }

    public function display_all()
    {
        echo "New Car  \r\n";
        echo "Price: " . $this->price . "\r\n";
        echo "Speed: " . $this->speed . "\r\n";
        echo "Fuel: " . $this->fuel . "\r\n";
        echo "Mileage " . $this->mileage . "mpg \r\n";
        echo "Tax: " . $this->tax . "\r\n";
    }

}

$car1 = new Car(20000, 55, "Full", 15);
$car2 = new Car(10000, 105, "empty", 25);
$car3 = new Car(30000, 75, "1/2 tank", 20);
$car4 = new Car(2000, 55, "1/4 tank", 30);
$car5 = new Car(50000, 140, "Full", 10);


