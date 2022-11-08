<?php
namespace App\Patterns\Creational\Builder\Computer\MotherBoard\Sockets;

class USB 
{
    private string $version;

    public function __construct($version)
    {
        $this->version = $version;
    }

    public function getVersion()
    {
        return $this->version;
    }
}