<?php
namespace App\OOP\PHP\Relationship;

use App\OOP\PHP\Relationship\Teacher;

class MathTeacher extends Teacher{
     public function assignAHomeWork():string{
        return "do Math homework my dear student... 10 + 44 = ?";
     }

}