<?php


namespace CarBundle\Service;


use CarBundle\Entity\Car;

class DataChecker
{
    /** @var boolean */
    protected $requireImagesToPromotCar;

    /**
     * DataChecker constructor.
     * @param bool $requireImagesToPromotCar
     */
    public function __construct($requireImagesToPromotCar)
    {
        $this->requireImagesToPromotCar = $requireImagesToPromotCar;
    }


    public function checkCar(Car $car)
    {
        if($this->requireImagesToPromotCar){
            return false;
        }
        return true;
    }
}