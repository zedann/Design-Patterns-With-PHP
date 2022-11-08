<?php
namespace App\Patterns\Creational\FactoryMethod\Dialog\Buttons;

abstract class Button 
{
    abstract public function show():string;
    abstract public function click():void;
}