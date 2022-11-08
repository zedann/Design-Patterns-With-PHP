<?php
namespace App\Patterns\Creational\Prototype\Employee;

use App\Patterns\Creational\Prototype\Employee\Address;

class ProfileData 
{
    protected $name = "Employee Name";

    protected $age;

    protected Address $address;

    protected $telephoneNumber;

    protected $mobileNumber;

    protected $slackAccountNumber;

    public function __construct($name, $age, $address, $telephoneNumber, $mobileNumber, $slackAccountNumber)
    {
        $this->name = $name;
        $this->age = $age;
        $this->address = $address;
        $this->telephoneNumber = $telephoneNumber;
        $this->mobileNumber = $mobileNumber;
        $this->slackAccountNumber = $slackAccountNumber;
    }

    
}