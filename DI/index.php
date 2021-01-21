<?php

require_once('Car.php');
require_once('Motorcycle.php');

$car = new Car();
$car->fillUp();

$motorcycle = new Motorcycle();
$motorcycle->fillUp();