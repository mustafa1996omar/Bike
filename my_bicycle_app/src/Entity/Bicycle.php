<?php

namespace App\Entity;

class Bicycle
{

    private $color;
    private $model;
    private $speed;
    private $topSpeed;
    private $numberOfGears;
    private $weight;

    public function __construct($color, $model, $speed, $topSpeed, $numberOfGears, $weight)
    {
        $this->setColor($color);
        $this->setModel($model);
        $this->setSpeed($speed);
        $this->setTopSpeed($topSpeed);
        $this->setNumberOfGears($numberOfGears);
        $this->setWeight($weight);
    }

    public function getColor()
    {
        return $this->color;
    }

    public function setColor($color)
    {
        $this->color = $color;
    }

    public function getModel()
    {
        return $this->model;
    }

    public function setModel($model)
    {
        $this->model = $model;
    }

    public function getSpeed()
    {
        return $this->speed;
    }

    public function setSpeed($speed)
    {
        if (!is_numeric($speed)) {
            throw new \InvalidArgumentException('Speed must be a number');
        }

        $this->speed = $speed;
    }

    public function getTopSpeed()
    {
        return $this->topSpeed;
    }

    public function setTopSpeed($topSpeed)
    {
        if (!is_numeric($topSpeed)) {
            throw new \InvalidArgumentException('Top speed must be a number');
        }

        $this->topSpeed = $topSpeed;
    }

    public function getNumberOfGears()
    {
        return $this->numberOfGears;
    }

    public function setNumberOfGears($numberOfGears)
    {
        if (!is_int($numberOfGears)) {
            throw new \InvalidArgumentException('Number of gears must be an integer');
        }

        $this->numberOfGears = $numberOfGears;
    }

    public function getWeight()
    {
        return $this->weight;
    }

    public function setWeight($weight)
    {
        if (!is_numeric($weight)) {
            throw new \InvalidArgumentException('Weight must be a number');
        }

        $this->weight = $weight;
    }

    public function __toString()
    {
        return "Bicycle: {$this->model} ({$this->color}), Current Speed: {$this->speed}, Top Speed: {$this->topSpeed}, Gears: {$this->numberOfGears}, Weight: {$this->weight}";
    }


    public function accelerate()
    {
        $newSpeed = $this->speed + 5;

        if ($newSpeed > $this->topSpeed) {
            $this->speed = $this->topSpeed;
        } else {
            $this->speed = $newSpeed;
        }
    }

    public function brake()
    {
        $newSpeed = $this->speed - 5;

        if ($newSpeed < 0) {
            $this->speed = 0;
        } else {
            $this->speed = $newSpeed;
        }
    }
}
