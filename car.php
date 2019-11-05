<?php

require_once 'vehicle.php';

class Car extends Vehicle implements LightableInterface
{
    /**
     * @var string
     */
    private $_energy;

    /**
     * @var int
     */
    private $_energyLevel;
    /**
     * @var bool
     */
    private $on = true;
    /**
     * @var bool
     */
    private $off = false;

    const ALLOWED_ENERGIES = [
        'fuel',
        'electric',
    ];

    public function __construct(string $color, int $nbSeats, string $_energy)
    {
        parent::__construct($color, $nbSeats);
        $this->_energy = $_energy;
    }

    public function get_Energy(): string
    {
        return $this->_energy;
    }

    public function set_Energy(string $energy): car
    {
        if(in_array($_energy, self::ALLOWED_ENERGIES)){
            $this->set_Energy($_energy);
        }
        return $this;
    }

    public function get_EnergyLevel(): int
    {
        return $this->_energyLevel;
    }

    public function set_EnergyLevel(int $_energyLevel): void
    {
        $this->_energyLevel = $_energyLevel;
    }
    public function changeWheel($nbWheels)
    {
        echo "utiliser un cric";
    }

    public function switchOn()

    {
        return $this->on;
        // TODO: Implement switchOn() method.
    }
    public function switchOff()
    {
        return $this->off;
    }
}