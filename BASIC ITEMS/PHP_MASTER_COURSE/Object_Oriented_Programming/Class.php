<?php

class Car
{
    //Class variables
    public $wheels = 4;
    protected $hood = 1;
    private $engine = 1;
    var $doors = 4;

    function MoveWheels()
    {
        $this->doors = 4;
        echo "Wheels Move . <br>";
        echo $this->engine . "<br>";
    }
}

//Check if class exist or not
if (class_exists("Car")) {
    echo "Yes . <br>";
} else {
    echo "No";
}

//Check if method exist or not
if (method_exists("Car", "MoveWheels")) {
    echo "The method Exist .<br>";
} else {
    echo "Not Exist. <br>";
}
$bmw = new Car();
$mercedes_benz = new Car();

$bmw->MoveWheels();
$bmw->doors = 4;
//can not access from out of class
//echo $bmw->engine . "<br>";
//echo $bmw->hood . "<br>";
echo $mercedes_benz->doors = 10 . "<br>";

//Inheritance
class Plane extends Car
{
    var $wheels;

    function MoveWheels()
    {
        echo $this->hood . "<br>";
    }

    //Constructor
    function __construct()
    {
        $this->wheels = 20;
    }
}

$jet = new Plane();
//echo $jet->engine . "<br>";
echo $jet->wheels . "<br>";


//Static property
Class Steamer
{
    static $hood = 1;
    function Move(){
        Steamer::$hood = 10;
    }
}

$obj = new Steamer();
//can not access by doing below
//echo $obj->hood;
echo Steamer::$hood. "<br>";
Steamer::Move();
echo Steamer::$hood. "<br>";




