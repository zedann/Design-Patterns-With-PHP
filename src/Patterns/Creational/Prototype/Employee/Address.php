<?php
namespace App\Patterns\Creational\Prototype\Employee;

class Address
{
    protected $longitude;

    protected $latitude;

    protected $streetName;

    protected $city;

    protected $country;

    protected $buildingNumber;

    protected $zipCode;

    public function __construct($longitude, $latitude, $streetName, $city, $country, $buildingNumber, $zipCode)
    {
        $this->longitude = $longitude;
        $this->latitude = $latitude;
        $this->streetName = $streetName;
        $this->city = $city;
        $this->country = $country;
        $this->buildingNumber = $buildingNumber;
        $this->zipCode = $zipCode;
    }



    /**
     * Get the value of longitude
     */ 
    public function getLongitude()
    {
        return $this->longitude;
    }

    /**
     * Get the value of latitude
     */ 
    public function getLatitude()
    {
        return $this->latitude;
    }

    /**
     * Get the value of streetName
     */ 
    public function getStreetName()
    {
        return $this->streetName;
    }

    /**
     * Get the value of city
     */ 
    public function getCity()
    {
        return $this->city;
    }

    /**
     * Get the value of country
     */ 
    public function getCountry()
    {
        return $this->country;
    }

    /**
     * Get the value of buildingNumber
     */ 
    public function getBuildingNumber()
    {
        return $this->buildingNumber;
    }

    /**
     * Get the value of zipCode
     */ 
    public function getZipCode()
    {
        return $this->zipCode;
    }
}