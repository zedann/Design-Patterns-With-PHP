<?php
namespace App\Patterns\Creational\Builder\Computer;

class Monitor
{
    private $resolution;

    public function __construct($resolution)
    {
        $this->resolution = $resolution;
    }

    /**
     * Get the value of resolution
     */ 
    public function getResolution()
    {
        return $this->resolution;
    }
}