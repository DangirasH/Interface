<?php

require_once 'HighWay.php';
require_once 'Vehicle.php';
require_once 'Car.php';
require_once 'Bicycle.php';
require_once 'Truck.php';

final class PedestrianWay extends HighWay
{
    protected int $maxSpeed = 10;
    protected int $nbLane = 1;


    public function addVehicle(Vehicle $vehicle): string
    {
        if ($vehicle instanceof Bicycle) {
            $this->setCurrentVehicles($vehicle);
            $message = "vehicle added";
        } else {
            $message = "vehicle not added";
        }
        return $message;
    }
}