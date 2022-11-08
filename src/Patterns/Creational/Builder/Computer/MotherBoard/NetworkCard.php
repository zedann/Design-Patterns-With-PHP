<?php
namespace App\Patterns\Creational\Builder\Computer\MotherBoard;

class NetworkCard 
{
    private $category;

    public function __construct($category)
    {
        $this->category = $category;
    }

    

    /**
     * Get the value of speed
     */ 
    public function getCategory()
    {
        return $this->category;
    }
}