<?php
namespace App\Patterns\Creational\Prototype\Employee;

use App\Patterns\Creational\Prototype\Employee\Privileges\Types\TypeInterface;

class Privileges 
{
    protected array $privileges;

    public function __construct(array $privileges)
    {
        $this->privileges = $privileges;
    }
    public function addPrivilege(TypeInterface $privilege)
    {
        array_push($this->privileges , $privilege);
    }
    
}