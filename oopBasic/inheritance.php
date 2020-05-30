<?php

// inheritance 

class Animal
{
    protected $name;
    public function __construct($initialName = "")
    {
        $this->name = $initialName;
    }
    public function eat()
    {
        echo "{$this->name} is eating\n";
    }
    public function run()
    {
        echo "{$this->name} is running\n";
    }
    public function sleep()
    {
        echo "{$this->name} is sleeping\n";
    }

    public function sayHi()
    {
    }
}

class Human extends Animal
{
    public function sayHi()
    {
        echo "{$this->name} says Salam\n";
    }
}

class Cat extends Animal
{
    public function sayHi()
    {
        echo "{$this->name} says Mew\n";
    }
}

class Dog extends Animal
{
    public function sayHi()
    {
        echo "{$this->name} says Ghew\n";
    }
}

$man1 = new Human("Mamun");
$man1->sayHi();
$man1->sleep();
echo "---\n";
$cat1 = new Cat("Tom");
$cat1->sayHi();
$cat1->run();
echo "---\n";
$dog1 = new Dog("Mithu");
$dog1->sayHi();
$dog1->eat();