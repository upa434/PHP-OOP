<?php

namespace Data;

use Override;

interface car
{
    function drive():void;

    function getTier():int;
}

class Avanza implements car
{
    
    public function drive(): void
    {
        echo "drive Avanza" . PHP_EOL;
    }

    
    public function getTier(): int
    {
        return 4;
    }
}