<?php

declare(strict_types=1);

namespace Pattern\Decorator\StarbuzzWithSizes;

class Soy extends CondimentDecorator
{
    public function __construct(Beverage $beverage)
    {
        $this->description = 'Soy';
        $this->beverage = $beverage;
    }

    public function cost(): int
    {
        $cost = match ($this->beverage->getSize()) {
            Size::TALL => 10,
            Size::GRANDE => 15,
            Size::VENTI => 20
        };

        return $cost + $this->beverage->cost();
    }
}
