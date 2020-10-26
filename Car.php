<?php

require_once 'Vehicle.php';

class Car extends Vehicle
{
    const ALLOWED_ENERGIES = [
        'fuel',
        'electric',
    ];

    private $energy;
    private $energyLevel;
    private $hasParkBrake;

    public function __construct(string $color, int $nbSeats, string $energy)
    {
        parent::__construct($color, $nbSeats);
        $this->energy = $energy;
    }


    public function forward() : string
    {
        $this->currentSpeed = 50;
        return "Cruising speed! ";
    }


    public function start(): string
    {
        if ($this->hasParkBrake) {
            throw new Exception('Park brake !!');
        }

        $sentence = "";
        while ($this->currentSpeed <50) {
            $this->currentSpeed = $this->currentSpeed + 10;
            $sentence .= "Go! ";
        }
        $sentence .= "Okay ! ";
        return $sentence;


    }

    public function setEnergy(string $energy): Car
    {
        if (in_array($energy, self::ALLOWED_ENERGIES)) {
            $this->energy = $energy;
        }
        return $this;
    }

    public function getEnergy(): string
    {
        return $this->energy;
    }

    public function setEnergyLevel(int $energyLevel): void
    {
        $this->energyLevel = $energyLevel;
    }

    public function getEnergyLevel(): string
    {
        return $this->energyLevel;
    }

    public function setParkPBrake(bool $parkBrake)
    {
        $this -> hasParkBrake = $parkBrake;
        return $this->hasParkBrake;

    }

    public function getParkPBrake()
    {
        return $this->hasParkBrake;

    }


}
