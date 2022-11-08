<?php
namespace App\Patterns\Creational\Builder\Computer\MotherBoard;

class CPU 
{
    private $speed;

    public function __construct($speed)
    {
        $this->speed = $speed;
    }

    

    /**
     * Get the value of speed
     */ 
    public function getSpeed()
    {
        return $this->speed;
    }
}