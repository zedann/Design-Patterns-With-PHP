<?php
namespace App\Patterns\Creational\Prototype\Employee;
class EmployeePrototype implements Prototype
{
    protected Salary $salary;

    protected ProfileData $ProfileData;

    protected Privileges $privileges;

    public function __construct($name, $salary, $ProfileData, $privileges)
    {
        $this->salary = $salary;
        $this->ProfileData = $ProfileData;
        $this->privileges = $privileges;
    }

    public function __clone()
    {
        
    }
    
}