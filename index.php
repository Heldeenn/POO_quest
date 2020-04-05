<?php
require_once 'Highway.php';
require_once 'Motorway.php';
require_once 'Residentialway.php';
require_once 'Residentialway.php';
require_once 'PedestrianWay.php';
require_once 'Vehicle.php';
require_once 'Car.php';
require_once 'Bike.php';
require_once 'Skateboard.php';

$bike = new Bike('blue', 2);
$car = new Car('orange', 5, 'electric');
$skateboard = new Skateboard('black', 0);
var_dump($bike);
var_dump($car);
var_dump($skateboard);

$tangentielle = new MotorWay([], 4, 130);
$tangentielle->addVehicle($bike);
$tangentielle->addVehicle($skateboard);
$tangentielle->addVehicle($car);
var_dump($tangentielle);

$rue = new ResidentialWay([], 2, 50);
$rue->addVehicle($bike);
$rue->addVehicle($skateboard);
$rue->addVehicle($car);
var_dump($rue);

$petiteRue = new PedestrianWay([],1,10);
$petiteRue->addVehicle($bike);
$petiteRue->addVehicle($skateboard);
$petiteRue->addVehicle($car);
var_dump($petiteRue);
