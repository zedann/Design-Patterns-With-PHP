<?php
namespace App\Patterns\Creational\Prototype\Employee\Privileges\Types;

use App\Patterns\Creational\Prototype\Employee\Privileges\Types\TypeInterface;


class WebProjectPrivileges implements TypeInterface
{
    public function enable():bool{
        return true;
    }
    public function disable():bool{
        return true;
    }
}