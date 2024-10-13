<?php

declare(strict_types=1);

namespace Pattern\Strategy\Duck;

use Pattern\Utils\Console;

class FlyRocketPowered implements FlyBehavior
{
    public function fly(): void
    {
        Console::getInstance()->cyan("I'm flying with a rocket!");
    }
}
