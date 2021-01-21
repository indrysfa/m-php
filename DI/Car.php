<?php

require_once('Premium.php');

class Car 
{
    private $fuel;

    public function __construct()
    {
        $this->fuel = new Premium(); // instansiasi premium
    }

    public function fillUp()
    {
        $string = "This car is filled up with {$this->fuel->getName()}";
        $string .= " with octane {$this->fuel->getOctane()}";
        $string .= " and you have to pay Rp {$this->fuel->getPrice()}\n";

        echo $string;
    }
}