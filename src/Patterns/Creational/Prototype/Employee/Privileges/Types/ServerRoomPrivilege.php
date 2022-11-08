<?php
namespace App\Patterns\Creational\Prototype\Employee\Privileges\Types;

use App\Patterns\Creational\Prototype\Employee\Privileges\Types\TypeInterface;


class ServerRoomPrivilege implements TypeInterface
{
    public function enable():bool{
        return true;
    }
    public function disable():bool{
        return true;
    }
}