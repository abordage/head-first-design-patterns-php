<?php

declare(strict_types=1);

namespace Pattern\Decorator\Starbuzz;

class Soy extends CondimentDecorator
{
    public function __construct(Beverage $beverage)
    {
        $this->description = 'Soy';
        $this->beverage = $beverage;
    }

    public function cost(): int
    {
        return 15 + $this->beverage->cost();
    }
}
