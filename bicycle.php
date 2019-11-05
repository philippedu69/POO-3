<?php

require_once 'vehicle.php';

class Bicycle extends Vehicle
{
     public function changeWheel($nbWheels)
    {
        echo "démonter la roue";
    }
}