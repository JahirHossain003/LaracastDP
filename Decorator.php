<?php

interface CarService{

    public function getCost();

    public function getDesc();

}

class BasicInspection implements CarService{

    public function getCost()
    {
        return 25;
    }

    public function getDesc()
    {
        return 'Basic Inspection';
    }
}

class OilChange implements CarService{

    private $carService;

    function __construct(CarService $carService)
    {
        $this->carService = $carService;
    }

    public function getCost()
    {
        return 30 + $this->carService->getCost();
    }

    public function getDesc()
    {
        return $this->carService->getDesc() .", and oilChange";
    }
}

class TyreRotation implements CarService{

    private $carService;

    function __construct(CarService $carService)
    {
        $this->carService = $carService;
    }


    public function getCost()
    {
        return 10 + $this->carService->getCost();
    }

    public function getDesc()
    {
       return $this->carService->getDesc() .", and Tyrerotation";
    }
}

$obj = new OilChange(new BasicInspection);

echo $obj->getDesc();