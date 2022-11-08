<?php
namespace App\Patterns\Creational\Builder\Computer\MotherBoard;

class GPU 
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