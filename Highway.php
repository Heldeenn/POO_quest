<?php

abstract class Highway {
    /**
     * @var array
     */
    protected $currentVehicles = [];

    /**
     * @var int
     */
    protected $nbLane;

    /**
     * @var int
     */
    protected $maxSpeed;

    /**
     * @param array $currentVehicles
     * @param int $nbLane
     * @param int $maxSpeed
     */

    public function __construct(array $currentVehicles,int $nbLane,int $maxSpeed)
    {
        $this->currentVehicles = $currentVehicles;
        $this->nbLane = $nbLane;
        $this->maxSpeed = $maxSpeed;
    }

    /**
     * @param $vehicle
     */
    abstract protected function addVehicle($vehicle): void;

    /**
     * @return array
     */
    public function getCurrentVehicles()
    {
        return $this->currentVehicles;
    }

    /**
     * @param array $currentVehicles
     */
    public function setCurrentVehicles($currentVehicles)
    {
        $this->currentVehicles = $currentVehicles;
    }

    /**
     * @return int
     */
    public function getNbLane()
    {
        return $this->nbLane;
    }

    /**
     * @param int $nbLane
     */
    public function setNbLane($nbLane)
    {
        $this->nbLane = $nbLane;
    }

    /**
     * @return int
     */
    public function getMaxSpeed()
    {
        return $this->maxSpeed;
    }

    /**
     * @param int $maxSpeed
     */
    public function setMaxSpeed($maxSpeed)
    {
        $this->maxSpeed = $maxSpeed;
    }
}