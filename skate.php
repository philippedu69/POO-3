<?php

require_once 'vehicle.php';

class Skate extends Vehicle
{
    public function changeWheel($nbWheels)
    {
        echo "dévisser la roue";

    }
}