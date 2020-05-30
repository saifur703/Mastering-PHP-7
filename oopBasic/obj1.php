<?php

// Human Class
class Human
{
    public $name;
    function sayHi()
    {
        echo "Salam\n";
        echo "My Name is: {$this->name}\n";
    }
}

// Cat Class 
class Cat
{
    function sayHi()
    {
        echo "Mew\n";
    }
}

// Dog Class 
class Dog
{
    function sayHi()
    {
        echo "Ghew\n";
    }
}

// Object
$h1 = new Human();
$h1->name = "Saifur"; // set
$h1->name; // get
$h1->sayHi();

$c1 = new Cat();
$c1->sayHi();

$d1 = new Dog();
$d1->sayHi();