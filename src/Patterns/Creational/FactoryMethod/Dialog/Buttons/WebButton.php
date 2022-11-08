<?php
namespace App\Patterns\Creational\FactoryMethod\Dialog\Buttons;

use App\Patterns\Creational\FactoryMethod\Dialog\Buttons\Button;



class WebButton extends Button
{
     public function show():string
    {
        return "<button>Web Button</button>";
    }
     public function click():void{
        //imp
    }
}