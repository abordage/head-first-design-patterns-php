<?php

namespace Pattern\Decorator\Starbuzz;

class Mocha extends CondimentDecorator
{
    public function __construct(Beverage $beverage)
    {
        $this->description = 'Mocha';
        $this->beverage = $beverage;
    }

    public function cost(): int
    {
        return 20 + $this->beverage->cost();
    }
}
