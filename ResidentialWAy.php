<?php

require_once 'HighWay.php';

final class ResidentialWAy extends HighWay
{
    /*
     * @var int
     */
    protected $nbLane = 2;
    /*
     * @var
     */
    protected $maxSpeed = 50;

    public function addVehicle(object $vehicle)
    {
        if($vehicle instanceof Car)
        {
            $this->currentVehicle [] = $vehicle;
        }

    }

}