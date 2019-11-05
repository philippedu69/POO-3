<?php
require_once 'vehicle.php';
require_once 'bicycle.php';
require_once 'car.php';
require_once 'skate.php';
require_once 'truck.php';
require_once 'HighWay.php';
require_once 'ResidentialWAy.php';
require_once 'MotorWay.php';
require_once 'PedestrianWay.php';
require_once 'LightableInterface.php';

$bike = new Bicycle('white', 1);
$skate = new Skate('red', 1);
$opel = new Car('white', 5, 'fuel');
$honda = new Car('black', 2, 'fuel');

$pedestrianWay = new PedestrianWay();
$motorWay = new MotorWay();
$residentialWay = new ResidentialWay();

$motorWay->addVehicle($honda);
$pedestrianWay->addVehicle($opel);
$pedestrianWay-> addVehicle($bike);
$residentialWay->addVehicle($skate);
$residentialWay->addVehicle($opel);

echo $honda->switchOn();
echo $bike->switchOn();
echo $bike->forward(15);
echo $bike->switchOn();
echo $honda->switchOff();
echo $bike->switchOff();
var_dump($honda);
var_dump($bike);







