<?php
namespace App\OOP\PHP;

class Salary {
    protected $salary;

    protected $tax;

    protected $absent;
    
    protected $overTime;

    protected $overTimeRate;

    public function __construct($salary, $tax, $absent, $overTime, $overTimeRate)
    {
        $this->salary = $salary;
        $this->tax = $tax;
        $this->absent = $absent;
        $this->overTime = $overTime;
        $this->overTimeRate = $overTimeRate;
    }
    public function calculateSalary( ):float
    {
        return $this->salary - ($this->salary * $this->tax);
    }
   
   

    

}