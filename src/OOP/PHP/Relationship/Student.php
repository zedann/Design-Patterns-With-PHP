<?php
namespace App\OOP\PHP\Relationship;

class Student {
    private $name;
    
    private $homeWork;
    private  int $homeWorkScore = 50;

    public function __construct($name)
    {
        $this->name = $name; 
    }

    public function assignATempTeacher(Teacher $teacher){
       $this->homeWork = $teacher->assignAHomeWork();
    }
 
    public function getHomeWorkScore()
    {
        return $this->homeWorkScore;
    }
    public function doHomeWork()
    {
        $this->homeWorkScore = 60;
    }

    

    /**
     * Get the value of homeWork
     */ 
    public function getHomeWork()
    {
        return $this->homeWork;
    }

}