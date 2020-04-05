<?php
require_once 'Highway.php';

final class MotorWay extends Highway
{
    protected $nbLane = 4;
    protected $maxSpeed = 130;

    final public function addVehicle($vehicle): void
    {
        if ($vehicle instanceof Car) {
            $this->currentVehicles[] = $vehicle;
        }
    }
}