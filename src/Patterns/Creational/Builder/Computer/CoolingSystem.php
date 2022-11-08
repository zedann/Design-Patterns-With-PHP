<?php
namespace App\Patterns\Creational\Builder\Computer;

class CoolingSystem
{
    private bool $lowTempLimit;

    public function __construct($lowTempLimit)
    {
        $this->lowTempLimit = $lowTempLimit;
    }

    /**
     * Get the value of LowTempLimit
     */ 
    public function getLowTempLimit()
    {
        return $this->lowTempLimit;
    }
}