<?php

declare(strict_types=1);

namespace Pattern\Decorator\Starbuzz;

class Decaf extends Beverage
{
    public function __construct()
    {
        $this->description = 'Decaf Coffee';
    }

    public function cost(): int
    {
        return 105;
    }
}
