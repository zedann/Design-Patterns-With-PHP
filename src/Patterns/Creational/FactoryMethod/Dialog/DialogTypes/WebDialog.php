<?php
namespace App\Patterns\Creational\FactoryMethod\Dialog\DialogTypes;


use App\Patterns\Creational\FactoryMethod\Dialog\Buttons\Button;
use App\Patterns\Creational\FactoryMethod\Dialog\Buttons\WebButton;



class WebDialog extends Dialog
{
    public function createButton():Button
    {
        return new WebButton();
    }
}