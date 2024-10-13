<?php

declare(strict_types=1);

namespace Pattern\Decorator\Starbuzz;

class Whip extends CondimentDecorator
{
    public function __construct(Beverage $beverage)
    {
        $this->description = 'Whip';
        $this->beverage = $beverage;
    }

    public function cost(): int
    {
        return 10 + $this->beverage->cost();
    }
}
