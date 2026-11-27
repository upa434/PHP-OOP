<?php

namespace Data;
interface HasBrand
{
    function getbrand(): string;

}

interface isMaintenance
{
    function isMaintenance(): bool;
}


interface car extends HasBrand
{
    function drive():void;

    function getTier():int;
}

class Avanza implements car, isMaintenance
{
    
    public function drive(): void
    {
        echo "drive Avanza" . PHP_EOL;
    }

    
    public function getTier(): int
    {
        return 4;
    }

    
    public function getbrand(): string
    {
      return "toyota";  
    }

    
    public function isMaintenance(): bool
    {
      return false;  
    }
}