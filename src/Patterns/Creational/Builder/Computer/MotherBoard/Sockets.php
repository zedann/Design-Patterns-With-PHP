<?php
namespace App\Patterns\Creational\Builder\Computer\MotherBoard;

class Sockets
{
    private array $sockets;

    public function __construct($sockets)
    {
        $this->sockets = $sockets;
    }
 
    public function getSockets() : array
    {
        return $this->sockets;
    }
}