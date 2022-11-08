<?php
namespace App\OOP\PHP\Relationship;

use App\OOP\PHP\Relationship\Teacher;

class ScienceTeacher extends Teacher{
     public function assignAHomeWork():string{
        return "do Science homework my dear student...";
     }

}