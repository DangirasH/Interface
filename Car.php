<?php


require_once 'Vehicle.php';
require_once 'LightableInterface.php';


class Car extends Vehicle implements LightableInterface

{
    public const  ALLOWED_ENERGIES = [
        "fuel",
        "electric"
    ];

    protected bool $hasParkBrake;
    protected string $energy;
    protected int $energyLevel;


    public function __construct(string $color, int $nbSeats, string $energy)
    {
        parent::__construct($color, $nbSeats);

        $this->setEnergy($energy);
    }


    public function start(): string
    {
        if ($this->getHasParkBrake() === true) {
            throw new Exception('Warning : Park brake on!');
        } else {
            $this->currentSpeed = 15;
            return 'Car started !';
        }
    }
    public function switchOn()

    {
        return true;
    }


    public function switchOff()
    {
        return false;
    }


    /* Getter Setter */

    public function getEnergy(): string
    {

        return $this->energy;
    }

    public function getEnergyLevel(): int

    {

        return $this->energyLevel;
    }

    public function setEnergyLevel(int $energyLevel): void

    {

        $this->energyLevel = $energyLevel;
    }


    public function setEnergy(string $energy): Car

    {

        if (in_array($energy, self::ALLOWED_ENERGIES)) {

            $this->energy = $energy;
        }

        return $this;
    }

    public function getHasParkBrake(): bool
    {

        return $this->hasParkBrake;
    }

    public function setHasParkBrake(bool $hasParkBrake): void

    {

        $this->hasParkBrake = $hasParkBrake;
    }
}
