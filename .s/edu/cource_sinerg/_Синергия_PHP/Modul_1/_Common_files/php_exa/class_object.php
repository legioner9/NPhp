<?php

class Car
{
    function Car()
    {
        $this->model = "Volga";
    }
}
$car_o = new Car;

echo $car_o->model;
