<?php

class Animal
{
    public $name;
    public $health;

    public function __construct($input_name)
    {
        $this->health = 100;
        $this->name = $input_name;
    }

    public function display_all()
    {
        echo "Parent Class: " . get_class() . "<br>";
        echo "Child Class: " . get_called_class() .  "<br>";
        echo "Name: " . $this->name . "<br>";
        echo "Health: " . $this->health . "<br><br>";
    }

    public function walk($num)
    {
        for($i=0;$i<$num;$i++)
        {
            $this->health = $this->health-1;
        }
    }

    public function run($num)
    {
        for($i=0;$i<$num;$i++)
        {
            $this->health = $this->health-5;
        }
    }

    public function moving($run, $walk)
    {
        $this->run($run);
        $this->walk($walk);
        $this->display_all();
    }
}

class Dog extends Animal
{
    function __construct($input_name)
    {
        parent:: __construct ($input_name);
        $this->health = 150;
    }

    function pet($num)
    {
        $this->health = $this->health + 5;
    }

    public function moving($run, $walk)
    {
        $this->pet(1);
        parent::moving($run, $walk);
    }
}

class Dragon extends Animal
{
    function __construct($input_name)
    {
        parent:: __construct($input_name);
        $this->health = 170;
    }

    function fly($num)
    {
        $this->health = $this->health -10;
    }

    function moving($run, $walk)
    {
        $this->fly(2);
        parent::moving($run, $walk);
    }
}

$animal = new Animal("Generic Animal");
$dog = new Dog("Fido");
$dragon = new Dragon("Eragon");

$animal->moving(2,3);
// $dog->pet(1)->moving(2,3);
$dog->moving(2,3);
$dragon->moving(2,3);
