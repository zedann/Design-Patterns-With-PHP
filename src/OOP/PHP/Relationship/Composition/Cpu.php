<?php
namespace App\OOP\PHP\Relationship\Composition;

class Cpu 
{
    private int $speed;
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