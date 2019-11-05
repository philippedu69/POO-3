<?php


abstract class HighWay
{
    /*
     * @var array
     */
    protected $currentVehicle = [];
    /*
     * @var int
     */
    protected $nbLane;
    /*
     * @var int
     */
    protected $maxSpeed;

    abstract public function addVehicle(object $vehicle);
}