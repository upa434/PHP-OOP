<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

class maneger
{
    var string $name;

    function sayHello(string $name) : void
    {
        echo "Hi $name,my name is maneger $this->name" . PHP_EOL;
    }

}

class VicePresident extends maneger
{
function sayHello(string $name) : void
    {
        echo "Hi $name,my name is VP $this->name" . PHP_EOL;
    }
}