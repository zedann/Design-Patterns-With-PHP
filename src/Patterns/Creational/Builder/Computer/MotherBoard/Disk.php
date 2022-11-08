<?php
namespace App\Patterns\Creational\Builder\Computer\MotherBoard;

class Disk 
{
    private $type;

    public function __construct($type)
    {
        $this->type = $type;
    }

    
    public function getType()
    {
        return $this->type;
    }
}