<?php

declare(strict_types=1);

namespace Pattern\Strategy\Duck;

use Pattern\Utils\Console;

class FlyNoWay implements FlyBehavior
{
    public function fly(): void
    {
        Console::getInstance()->yellow("I can't fly!");
    }
}
