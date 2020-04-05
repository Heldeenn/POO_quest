<?php
require_once 'Highway.php';

final class ResidentialWay extends Highway {
    protected $nbLane = 2;
    protected $maxSpeed = 50;

    final public function addVehicle($vehicle): void
    {
        if ($vehicle instanceof Vehicle) {
            $this->currentVehicles[] = $vehicle;
        }
    }
}