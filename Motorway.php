<?php
require_once 'Highway.php';

final class MotorWay extends Highway
{
    const ALLOWED_NBLANE = 4;
    protected $maxSpeed = 130;

    final public function addVehicle($vehicle): void
    {
        if ($vehicle instanceof Car) {
            $this->currentVehicles[] = $vehicle;
        }
    }
}