<?php
namespace App\OOP\PHP\Relationship\Composition;

class Ram 
{

    private int $size ;
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