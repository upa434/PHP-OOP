<?php
namespace traits;

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


class Person
{
    use SayGoodBye, SayHello, Hasname;
}