<?php
namespace App\OOP\PHP;

use App\OOP\PHP\Salary;

class OrganizationSalary extends Salary{

    protected float $organizationTax;
    public function __construct($salary, $tax, $absent, $overTime, $overTimeRate,$organizationTax)
    {
       parent::__construct($salary, $tax, $absent, $overTime, $overTimeRate);
       $this->organizationTax = $organizationTax;
    }

    
    public function calculateSalary( ):float
    {
        return $this->salary - ($this->salary * $this->tax) - ($this->salary * $this->organizationTax);
    }
}