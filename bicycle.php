<?php

require_once 'vehicle.php';
require_once 'LightableInterface.php';


class Bicycle extends Vehicle implements LightableInterface
{
    /**
     * @var bool
     */
    private $on = true;

    /**
     * @var bool
     */
    private $off = false;

     public function changeWheel($nbWheels)
    {
        echo "démonter la roue";
    }

    public function switchOn()
    {
        if($this->currentSpeed > 10)
        {
            return $this->on;
        }
        else
        {
            return $this->off;
        }
    }
    public function switchOff()
    {
        return $this->off;
    }

}