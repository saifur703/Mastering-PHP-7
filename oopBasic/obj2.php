<?php

class Information
{
    // public $name;
    // public $age;

    public function __construct($name = "", $age = "")
    {
        $this->name = $name;
        $this->age = $age;
    }
    function name()
    {
        echo "Hi\n";

        $this->info();
    }

    function info()
    {
        if ($this->name && $this->age) {
            echo "My Name is {$this->name} and I'm {$this->age} years old.\n";
        } else {
            echo "Please add Name and Age parameter.";
        }
    }
}
// $person1 = new Information();
// $person1->name = "Saifur"; // set 
// $person1->age = 24; // set 

// echo $person1->name();

$person1 = new Information("Saifur", 23);
$person2 = new Information("Mamun", 17);

echo $person1->name();
echo $person2->name();

$person3 = new Information();
$person4 = new Information();

echo $person3->name();
echo $person4->name();