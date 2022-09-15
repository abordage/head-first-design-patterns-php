<?php

namespace Pattern\Decorator\StarbuzzWithSizes;

class HouseBlend extends Beverage
{
    public function __construct()
    {
        $this->description = 'House Blend Coffee';
    }

    public function cost(): int
    {
        return 89;
    }
}
