<?php
namespace App\OOP\PHP\Relationship\printer;

class PlainTextPrinter extends Printer{
    public function printToScreen():string{
        return "<h1>this is plain text format of the : {$this->stringToBePrinted}</h1>";
    }
}