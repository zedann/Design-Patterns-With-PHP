<?php
namespace App\OOP\PHP\Relationship;

use App\OOP\PHP\Relationship\printer\Printer;

abstract class Teacher {
    protected $name;

    public function __construct($name)
    {
        $this->name = $name;
    }
    public function sayWelcome(Printer $printer): string
    {
        $printer->setStringToBePrinted($this->name);
        return $printer->printToScreen();
    }
    abstract public function assignAHomeWork():string;
    

    public function evaluateStudentHomeWork(Student $student)
    {
        if($student->getHomeWorkScore() >= 50){
            return "success";
        }
            return "failed";
    }
    
    
}