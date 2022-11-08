<?php
namespace App\Patterns\Creational\Builder\Computer\MotherBoard;

class RAM 
{
    private $size;

    public function __construct($size)
    {
        $this->size = $size;
    }
    /**
     * Get the value of size
     */ 
    public function getSize()
    {
        return $this->size;
    }
}