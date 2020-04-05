<?php
require_once 'Highway.php';

final class PedestrianWay extends Highway {
    protected $nbLane = 1;
    protected $maxSpeed = 10;

    final public function addVehicle($vehicle): void
    {
        if ($vehicle instanceof Bike || $vehicle instanceof Skateboard) {
            $this->currentVehicles[] = $vehicle;
        }
    }
}