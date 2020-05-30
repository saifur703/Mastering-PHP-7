<?php

class Fund
{
    private $fund;

    public function __construct($initialFund = 0)
    {
        $this->fund = $initialFund;
    }

    public function addFund($money = 0)
    {
        $this->fund += $money;
    }

    public function deductFund($money = 0)
    {
        $this->fund -= $money;
    }

    public function totalFund()
    {
        echo "Total Fund is {$this->fund}";
    }
}

$ourFund = new Fund(125);
$ourFund->addFund(11);
$ourFund->totalFund();