<?php
namespace App\OOP\PHP\Relationship\Composition;

class House 
{
    protected array $rooms;

    public function __construct(array $rooms)
    {
        $this->rooms = $rooms;
    }

    
    
}