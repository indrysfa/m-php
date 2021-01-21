<?php

class Premium 
{
    private $price;
    private $octane;
    private $name;

    public function __construct()
    {
        $this->price = 6500;
        $this->octane = 90;
        $this->name = 'Premium';
    }

    public function getPrice()
    {
        return $this->price;
    }

    public function getOctane()
    {
        return $this->octane;
    }

    public function getName()
    {
        return $this->name;
    }
}