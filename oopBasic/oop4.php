<?php

class ParentClass
{
    protected $name;
    public function __construct($initialName = "")
    {
        $this->name = $initialName;
        $this->sayHi();
    }

    public function sayHi()
    {
        echo "hi from {$this->name}\n";
    }
}

class ChildClass extends ParentClass
{
    public function sayHi()
    {
        parent::sayHi();
        echo "Hello\n";
    }
}

$p1 = new ChildClass("Mamun");