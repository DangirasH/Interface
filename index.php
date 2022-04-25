<?php

require_once 'Motorway.php';
require_once 'Pedestrianway.php';
require_once 'Residentialway.php';
require_once 'Vehicle.php';
require_once 'Car.php';
require_once 'Bicycle.php';
require_once 'Truck.php';


$truckOne = new Truck('black', 3, 90);
$ferari = new Car('red', 2, 300);
$toyota = new Car('green', 4, 180);
$bike = new Bicycle('white', 20);
$motorWay = new MotorWay();
$pedestrianWay = new PedestrianWay();
$residentialWay = new ResidentialWay();


echo 'MotorWay : ' . PHP_EOL;
echo $motorWay->addVehicle($ferari) . PHP_EOL;
echo $motorWay->addVehicle($toyota) . PHP_EOL;
echo $motorWay->addVehicle($bike) . PHP_EOL;

echo 'ResidentialWay : ';
echo $residentialWay->addVehicle($truckOne) . PHP_EOL;

echo 'PedestrianWay : ';
echo $pedestrianWay->addVehicle($bike) . PHP_EOL;

try {
    $ferari->start();
} catch(Exception $e) {
    echo $e->getMessage() . ',Turn off park brake';
    $ferari->setHasParkBrake(false);
} finally {
    echo PHP_EOL . 'Ma voiture roule comme un donut';
}
