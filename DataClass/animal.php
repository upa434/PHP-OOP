<?php
namespace data;

abstract class Animal
{
    public string $name;

    abstract  public function Run() : void;  
}

class cat extends Animal
{
public function Run() : void
{
    echo "cat $this->name is running" . PHP_EOL;
}
}

class dog extends Animal
{
    public function Run() : void
    {
        echo "dog $this->name is running" . PHP_EOL;
    }
}