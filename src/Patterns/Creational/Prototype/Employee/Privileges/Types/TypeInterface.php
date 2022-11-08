<?php 
namespace App\Patterns\Creational\Prototype\Employee\Privileges\Types;

interface TypeInterface
{
    public function enable():bool;
    public function disable():bool;
}