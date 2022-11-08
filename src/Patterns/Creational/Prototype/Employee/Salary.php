<?php
namespace App\Patterns\Creational\Prototype\Employee;

class Salary 
{
    protected $salary;

    protected $tax;

    protected $medicalInsurance;

    public function __construct($salary, $tax, $medicalInsurance)
    {
        $this->salary = $salary;
        $this->tax = $tax;
        $this->medicalInsurance = $medicalInsurance;
    }

    /**
     * Get the value of salary
     */ 
    public function getSalary()
    {
        return $this->salary;
    }

    /**
     * Get the value of tax
     */ 
    public function getTax()
    {
        return $this->tax;
    }

    /**
     * Get the value of medicalInsurance
     */ 
    public function getMedicalInsurance()
    {
        return $this->medicalInsurance;
    }
}