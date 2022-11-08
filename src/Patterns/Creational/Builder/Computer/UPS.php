<?php
namespace App\Patterns\Creational\Builder\Computer;

class UPS
{
    private bool $duration;

    public function __construct($duration)
    {
        $this->duration = $duration;
    }

    /**
     * Get the value of LowTempLimit
     */ 
    public function getDuration()
    {
        return $this->duration;
    }
}