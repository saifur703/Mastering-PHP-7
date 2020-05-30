<?php

// sum of two decimal Numbers 

class Sum
{
    private $a, $b;
    private $total;
    public function __construct($a = 0, $b = 0)
    {
        $this->a = $a;
        $this->b = $b;
        $this->calculation();
    }

    public function output()
    {
        echo "{$this->a} + {$this->b} = {$this->total}\n";
    }

    private function calculation()
    {
        $this->total = $this->a + $this->b;
    }
}

$sum1 = new Sum(5, 5);
$sum1->output();

$sum2 = new Sum(55, 98);
$sum2->output();

$sum3 = new Sum(101, 55);
$sum3->output();