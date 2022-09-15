<?php

namespace Pattern\Decorator\Starbuzz;

class DarkRoast extends Beverage
{
    public function __construct()
    {
        $this->description = 'Dark Roast Coffee';
    }

    public function cost(): int
    {
        return 99;
    }
}
