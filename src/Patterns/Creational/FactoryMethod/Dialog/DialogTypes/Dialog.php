<?php
namespace App\Patterns\Creational\FactoryMethod\Dialog\DialogTypes;

use App\Patterns\Creational\FactoryMethod\Dialog\Buttons\Button;



abstract class Dialog 
{
    abstract public function createButton():Button;
    public function renderDialog(){
        return "
            ################
            {$this->createButton()->show()}
            ################
        ";
    }
}