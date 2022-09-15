<?php

namespace Pattern\Decorator\StarbuzzWithSizes;

abstract class CondimentDecorator extends Beverage
{
    public string $description = 'Unknown Condiment';
    public Beverage $beverage;

    public function getDescription(): string
    {
        return $this->beverage->getDescription() . ', ' . $this->description;
    }

    public function getSize(): Size
    {
        return $this->beverage->getSize();
    }
}
