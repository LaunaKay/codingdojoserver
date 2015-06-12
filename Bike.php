<?php

class Bike
{
    public $price;
    public $max_speed;
    public $miles;

    public function __construct($input_price, $input_max_speed)
    {
        $this->price = $input_price;
        $this->max_speed = $input_max_speed;
        $this->miles = 0;
    }

    public function displayInfo()
    {
        echo "The price for this bike is" . $this->price . "\r\n";
        echo "The maximum speed for this bike is" . $this->max_speed . "\r\n";
        echo ("The total miles driven are" . $this->miles . "\r\n");
    }

    public function drive($num)
    {
        echo ("Driving \r\n");
        for($i=0;$i<$num;$i++)
           $this->miles = $this->miles + 10;
    }

    public function reversing($num)
    {
        echo ("Reversing \r\n");
        for($i=0;$i<$num;$i++)
        {
            if ($this->miles > 0)
                $this->miles = $this->miles - 5;
        }
    }

    public function moving($drive, $reversing)
    {
        $this->drive($drive);
        $this->reversing($reversing);
        $this->displayInfo();
    }
}

$bike1 = new Bike(200, "25mph");
$bike2 = new Bike(100, "30mph");
$bike3 = new Bike(300, "10mph");


//$bike1->displayInfo();

$bike1->moving(3,1);
$bike2->moving(2,2);
$bike3->moving(0,3);


