<?php

declare(strict_types=1);

namespace Pattern\Strategy\Duck;

use Pattern\Utils\Console;

class MuteQuack implements QuackBehavior
{
    public function quack(): void
    {
        Console::getInstance()->red('<< Silence >>');
    }
}
