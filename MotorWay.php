<?php
require_once 'HighWay.php';

 final class MotorWay extends HighWay
{
    /*
     * @var int
     */
    protected $nbLane = 4;
    /*
     * @var
     */
    protected $maxSpeed = 130;

     public function addVehicle(object $vehicle)
     {
         if($vehicle instanceof Bicycle){
             echo 'Non autorisé !';
         }
         else{
             $this->currentVehicle []= $vehicle;
         }
     }
}