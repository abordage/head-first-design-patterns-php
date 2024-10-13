<?php

declare(strict_types=1);

namespace Pattern\Decorator\Starbuzz;

class Milk extends CondimentDecorator
{
    public function __construct(Beverage $beverage)
    {
        $this->description = 'Milk';
        $this->beverage = $beverage;
    }

    public function cost(): int
    {
        return 10 + $this->beverage->cost();
    }
}
