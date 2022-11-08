<?php
namespace App\OOP\PHP;

use WeakMap;
use WeightHolder;

class Order {
    private $source;
    private $destination;
    private int $weight;
    /**
     * Undocumented function
     *
     * @param [string] $source
     * @param [string] $destination
     * @param [int] $weight
     */
    public function __construct($source,$destination,$weight)
    {
        $this->source = $source;
        $this->destination = $destination;
        $this->weight = $weight;
    }

    public function deliverOrder(Car $car) : string
    {
        $car->turnOn();
        $car->move();
        $car->accelerate(120);
        $car->park();
        $car->turnOff();

        if($car instanceof WeightHolder){
            $car->leftCargo();
        }
        return "I am Moving From {$this->source} To {$this->destination} To Deliver a Package of {$this->weight} kg";
    }

    
    
}