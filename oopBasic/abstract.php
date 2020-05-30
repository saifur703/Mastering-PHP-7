<?php

abstract class Shape
{

    abstract public function getArea();
}


class RectAngle extends Shape
{
    private $base;
    private $height;
    public function __construct($base, $height)
    {
        $this->base = $base;
        $this->height = $height;
    }
    public function getArea()
    {
        echo $this->base * $this->height;
    }
}

$rect1 = new Rectangle(5, 7);
$rect1->getArea();