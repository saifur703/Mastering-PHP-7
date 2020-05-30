<?php

class DistrictCollections implements IteratorAggregate
{
    private $districts;
    public function __construct()
    {
        $this->districts = array();
    }

    public function add($district)
    {
        array_push($this->districts, $district);
    }

    // public function getDistricts()
    // {
    //     return $this->districts;
    // }

    public function getIterator()
    {
        return new ArrayIterator($this->districts);
    }
}

$districts = new DistrictCollections();
$districts->add("Comilla");
$districts->add("Rajshahi");
$districts->add("Sylhet");

// $_districts = $districts->getDistricts();

foreach ($districts as $district) {
    echo $district . "\n";
}