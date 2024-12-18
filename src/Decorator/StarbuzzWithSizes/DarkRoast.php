<?php

declare(strict_types=1);

namespace Pattern\Decorator\StarbuzzWithSizes;

class DarkRoast extends Beverage
{
    public function __construct()
    {
        $this->description = 'Dark Roast Coffee';
    }

    public function cost(): int
    {
        return 99;
    }
}
