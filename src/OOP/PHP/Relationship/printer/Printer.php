<?php
namespace App\OOP\PHP\Relationship\printer;

abstract class Printer{
    protected $stringToBePrinted;
    abstract function printToScreen():string;

    /**
     * Get the value of stringToBePrinted
     */ 
    public function getStringToBePrinted()
    {
        return $this->stringToBePrinted;
    }

    /**
     * Set the value of stringToBePrinted
     *
     * @return  self
     */ 
    public function setStringToBePrinted($stringToBePrinted)
    {
        $this->stringToBePrinted = $stringToBePrinted;

        return $this;
    }
}