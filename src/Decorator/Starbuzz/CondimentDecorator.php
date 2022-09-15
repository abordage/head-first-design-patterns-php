<?php

namespace Pattern\Decorator\Starbuzz;

abstract class CondimentDecorator extends Beverage
{
    public string $description = 'Unknown Condiment';
    public Beverage $beverage;

    public function getDescription(): string
    {
        return $this->beverage->getDescription() . ', ' . $this->description;
    }
}
