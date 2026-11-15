<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

class maneger
{
    var string $name;

    var string $title;

    public function __construct(string $name = "", string $title = "maneger"){
    
           $this->name = $name;
           $this->title = $title;
                
    }

    function sayHello(string $name) : void
    {
        echo "Hi $name,my name is Maneger $this->name" . PHP_EOL;
    }

}

class VicePresident extends maneger
{

public function __construct(string $name = "")
 {
       parent::__construct($name, "Vp");
}

function sayHello(string $name) : void
    {
        echo "Hi $name,my name is Vp $this->name" . PHP_EOL;
    }
}