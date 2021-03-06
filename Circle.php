<?php

include_once('Shape.php');
include_once 'ResizeAble.php';

class Circle extends Shape implements ResizeAble
{
    public $radius;

    public function __construct($name, $radius)
    {
        parent::__construct($name);
        $this->radius = $radius;
    }

    public function calculateArea()
    {
        return pi() * pow($this->radius, 2);
    }

    public function calculatePerimeter()
    {
        return pi() * $this->radius * 2;
    }


    public function resize($percent)
    {
        return $this->calculateArea()*(1+$percent/100);

    }
}