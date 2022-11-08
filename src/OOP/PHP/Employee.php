<?php
namespace App\OOP\PHP;

use App\OOP\PHP\Salary;



class Employee{
    protected $name;

    protected $age;

    protected Salary $salary;

    public function __construct($name, $age,Salary $salary)
    {
        $this->name = $name;
        $this->age = $age;
        $this->salary = $salary;
    }

    
    

    /**
     * Get the value of name
     */ 
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set the value of name
     *
     * @return  self
     */ 
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get the value of salary
     */ 
    public function getSalary() : Salary
    {
        return $this->salary;
    }

    /**
     * Set the value of salary
     *
     * @return  self
     */ 
    public function setSalary($salary)
    {
        $this->salary = $salary;

        return $this;
    }
}