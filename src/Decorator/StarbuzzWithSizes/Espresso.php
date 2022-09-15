<?php

namespace Pattern\Decorator\StarbuzzWithSizes;

class Espresso extends Beverage
{
    public function __construct()
    {
        $this->description = 'Espresso';
    }

    public function cost(): int
    {
        return 199;
    }
}
