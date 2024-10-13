<?php

declare(strict_types=1);

namespace Pattern\Decorator\Starbuzz;

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
