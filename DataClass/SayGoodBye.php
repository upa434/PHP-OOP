<?php
namespace traits;

use Override;

trait SayGoodBye
{
    public function goodBye(?string $name): void
    {
        if (is_null($name)){
            echo "Good bye" . PHP_EOL;
        }else{
            echo "good bye $name" . PHP_EOL;
        }
    }
}

trait SayHello
{
    public function Hello(?string $name): void
    {
        if (is_null($name)){
            echo "Hello" . PHP_EOL;
        }else{
            echo "Hello $name" . PHP_EOL;
        }
    }
}

trait Hasname
{
    public string $name;
}

trait CanRun
{
    public abstract function Run(): void;
}
class Person
{
    use SayGoodBye, SayHello, Hasname, CanRun;

    public function Run(): void
    {
        echo "Person $this->name is running" . PHP_EOL;
    }

    
    public function goodBye(?string $name): void
    {
        echo "good bye in person" . PHP_EOL;
    }

    
    public function Hello(?string $name): void
    {
     echo "Hello in person" . PHP_EOL;   
    }
}