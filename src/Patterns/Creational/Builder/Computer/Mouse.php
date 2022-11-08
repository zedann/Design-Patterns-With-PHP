<?php
namespace App\Patterns\Creational\Builder\Computer;

class Mouse
{
    private bool $withExtraUtilities;

    public function __construct($withExtraUtilities)
    {
        $this->withExtraUtilities = $withExtraUtilities;
    }

    /**
     * Get the value of WithExtraUtilities
     */ 
    public function getWithExtraUtilities()
    {
        return $this->withExtraUtilities;
    }
}