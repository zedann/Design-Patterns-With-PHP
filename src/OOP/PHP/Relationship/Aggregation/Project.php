<?php
namespace App\OOP\PHP\Relationship\Aggregation;

class Project {
    protected string $name;

    protected \DateTime $deadLine;

    protected array $developers;

    public function __construct($name, $deadLine , array $developers)
    {
        $this->name = $name;
        $this->deadLine = $deadLine;
        $this->developers = $developers;
    }
    public function setDeadlineTo(\DateInterval $interval){
        $this->deadLine->add($interval);
    }
    public function showProjectInformation():string{
        $devNames = array_map(function(Developer $dev){
            return $dev->getName();
        },$this->developers);
        $devList = implode(', ',$devNames);
        return "
            project name : {$this->name}, 
            project deadline : {$this->deadLine->format('Y-m-d')},
            developers : {$devList}
        ";
    }
    
}