<?php

declare(strict_types=1);

namespace Pattern\Decorator\Starbuzz;

abstract class Beverage
{
    public string $description = 'Unknown Beverage';

    public function getDescription(): string
    {
        return $this->description;
    }

    abstract public function cost(): int;
}
