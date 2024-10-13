<?php

declare(strict_types=1);

namespace Pattern\Strategy\Duck;

use Pattern\Utils\Console;

class FlyWithWings implements FlyBehavior
{
    public function fly(): void
    {
        Console::getInstance()->green("I'm flying!");
    }
}
