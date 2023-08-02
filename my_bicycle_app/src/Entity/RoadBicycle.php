<?php

namespace App\Entity;

class RoadBicycle extends Bicycle
{
    private $aerodynamicShape;

    public function __construct($color = '', $model = '', $speed = 0, $topSpeed = 0, $numberOfGears = 0, $weight = 0, $aerodynamicShape = '')
    {
        // Call parent constructor
        parent::__construct($color, $model, $speed, $topSpeed, $numberOfGears, $weight);
        $this->setAerodynamicShape($aerodynamicShape);
    }

    // Getter and Setter
    public function getAerodynamicShape(): string
    {
        return $this->aerodynamicShape;
    }

    public function setAerodynamicShape(string $aerodynamicShape): self
    {
        $this->aerodynamicShape = $aerodynamicShape;
        return $this;
    }
}
