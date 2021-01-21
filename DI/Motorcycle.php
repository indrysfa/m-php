<?php

require_once('Premium.php');

class Motorcycle 
{
    private $fuel;

    public function __construct()
    {
        $this->fuel = new Premium();
    }

    public function fillUp()
    {
        $string = "This motorcycle is filled up with {$this->fuel->getName()}";
        $string .= " with octane {$this->fuel->getOctane()}";
        $string .= " and you have to pay Rp {$this->fuel->getPrice()}\n";

        echo $string;
    }
}