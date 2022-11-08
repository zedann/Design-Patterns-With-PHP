<?php

class CarDashboard {
    protected int $oilLevel;
    protected int $fuelLevel;
    protected int $airPressure;
    public function readDashBoard():string{
        return "showing the following analysis 
        <br> Fuel :{$this->getFuelLevel()}
        <br> Oil :{$this->getOilLevel()}
        <br> Air Pressure :{$this->getAirPressure()}
        ";
    }
    /**
     * Get the value of oilLevel
     */ 
    private function getOilLevel()
    {
        return $this->oilLevel;
    }

    /**
     * Set the value of oilLevel
     *
     * @return  self
     */ 
    private function setOilLevel($oilLevel)
    {
        $this->oilLevel = $oilLevel;

        return $this;
    }

    /**
     * Get the value of fuelLevel
     */ 
    private function getFuelLevel()
    {
        return $this->fuelLevel;
    }

    /**
     * Set the value of fuelLevel
     *
     * @return  self
     */ 
    private function setFuelLevel($fuelLevel)
    {
        $this->fuelLevel = $fuelLevel;

        return $this;
    }

    /**
     * Get the value of airPressure
     */ 
    private function getAirPressure()
    {
        return $this->airPressure;
    }

    /**
     * Set the value of airPressure
     *
     * @return  self
     */ 
    private function setAirPressure($airPressure)
    {
        $this->airPressure = $airPressure;

        return $this;
    }
}