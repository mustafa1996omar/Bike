<?php

namespace App\Entity;

class ElectricBicycle extends Bicycle
{
    private $batterySize;

    public function __construct($color = '', $model = '', $speed = 0, $topSpeed = 0, $numberOfGears = 0, $weight = 0, $batterySize = 0)
    {
        // Call parent constructor
        parent::__construct($color, $model, $speed, $topSpeed, $numberOfGears, $weight);
        $this->setBatterySize($batterySize);
    }

    // Getter and Setter
    public function getBatterySize(): int
    {
        return $this->batterySize;
    }

    public function setBatterySize(int $batterySize): self
    {
        $this->batterySize = $batterySize;
        return $this;
    }
}