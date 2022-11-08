<?php
namespace App\Patterns\Creational\Builder\Computer;

class Keyboard 
{
    private bool $uftSupport;

    public function __construct($uftSupport)
    {
        $this->uftSupport = $uftSupport;
    }

    /**
     * Get the value of resolution
     */ 
    public function getUftSupport()
    {
        return $this->uftSupport;
    }
}