<?php
namespace App\OOP\PHP\Relationship\Composition;
class Computer
{
    private Cpu $cpu;
    private Ram $ram;
    public function __construct(Cpu $cpu,Ram $ram)
    {
        $this->cpu = $cpu;
        $this->ram = $ram;
    }
    public function dashboard():string{
        return "my machine speed is {$this->cpu->getSpeed()} GHZ , Ram {$this->ram->getSize()} GB";
    }
}