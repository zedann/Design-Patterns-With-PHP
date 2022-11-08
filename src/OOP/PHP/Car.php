<?php
namespace App\OOP\PHP;

use CarDashboard;

abstract class Car{
    protected int $speed;
    protected int $numberOfDoors;
    protected string $gearBoxSystem;
    protected string $color;
    protected bool $turnedOn = false;

    protected CarDashboard $dashboard;
    
    public function __construct($speed,$numberOfDoors,$gearBoxSystem,$color)
    {
        $this->speed = $speed;
        $this->numberOfDoors = $numberOfDoors;
        $this->gearBoxSystem = $gearBoxSystem;
        $this->color = $color;
    }
    public abstract function move() : int;
    public abstract function turnOn() : bool;
    public abstract function turnOff() : bool;
    public abstract function accelerate(int $speed) : bool;
    public abstract function park() : bool;

    public function installDashboard( CarDashboard $dashboard ){
        $this->dashboard = $dashboard;
    }
    public function carInfo():string{
        if($this->dashboard){
            return $this->dashboard->readDashBoard();
        }else {
            return "this car does not has a dashboard";
        }
    }

    
}