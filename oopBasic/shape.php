<?php

class Shape
{
    protected $name;
    protected $area;

    public function __construct($initialName = "")
    {
        $this->name = $initialName;
        $this->calculatedArea();
    }

    public function getArea()
    {
        printf("This %s's area is %.2f \n", $this->name, $this->area);
        // echo "This {$this->name}'s area is {$this->area}\n";
    }

    private function calculatedArea()
    {
        // Calculations
    }
}

class Triangle extends Shape
{
    private $a, $b, $c;
    public function __construct($a, $b, $c)
    {
        $this->a = $a;
        $this->b = $b;
        $this->c = $c;
        $this->calculatedArea();

        parent::__construct("Triangle");
    }

    private function calculatedArea()
    {
        $perimeter = ($this->a + $this->b + $this->c) / 2;
        return $this->area = sqrt($perimeter * ($perimeter - $this->a) * ($perimeter - $this->b) * ($perimeter - $this->c));
    }
}

class Rectangle extends Shape
{
    private $a, $b;
    public function __construct($a = 0, $b = 0)
    {
        $this->a = $a;
        $this->b = $b;
        $this->calculatedArea();

        parent::__construct("Rectangle");
    }

    private function calculatedArea()
    {
        return $this->area = $this->a * $this->b;
    }
}

$r1 = new Rectangle(5, 6);
$r1->getArea();

$t1 = new Triangle(2, 3, 4);
$t1->getArea();