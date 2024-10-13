<?php

declare(strict_types=1);

namespace Pattern\Strategy\Duck;

use Pattern\Utils\Console;

class Quack implements QuackBehavior
{
    public function quack(): void
    {
        Console::getInstance()->magenta('Quack');
    }
}
