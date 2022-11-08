<?php
namespace App\OOP\PHP\Relationship\printer;

class HtmlPrinter extends Printer{
    public function printToScreen():string{
        return "<h1>this is html format of the : {$this->stringToBePrinted}</h1>";
    }
}