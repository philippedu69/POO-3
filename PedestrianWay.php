<?php
require_once 'HighWay.php';

final class PedestrianWay extends HighWay
{
    /*
     * @var int
     */
    protected $nbLane = 1;
    /*
     * @var
     */
    protected $maxSpeed = 10;

    public function addVehicle(object $vehicle)
    {
            if($vehicle instanceof Skate)
            {
                 $this->currentVehicle []= $vehicle;
            }
            if($vehicle instanceof Bicycle)
            {
                $this->currentVehicle [] = $vehicle;
            }
            else{
                echo 'non autorisé !';
            }
    }

}