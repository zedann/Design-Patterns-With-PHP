<?php
namespace App\Patterns\Creational\Builder\Computer\MotherBoard\Sockets;

class CType 
{
    private bool $withVideoTransfer;

    public function __construct($withVideoTransfer)
    {
        $this->withVideoTransfer = $withVideoTransfer;
    }

    public function getWithVideoTransfer()
    {
        return $this->withVideoTransfer;
    }
}