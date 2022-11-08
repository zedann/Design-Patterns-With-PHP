<?php
namespace App\OOP\PHP\Relationship\Composition;
class Room 
{
    protected $color;

    protected $size;

    public function __construct($color, $size)
    {
        $this->color = $color;
        $this->size = $size;
    }

    
}