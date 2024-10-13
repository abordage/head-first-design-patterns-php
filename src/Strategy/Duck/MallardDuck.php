<?php

declare(strict_types=1);

namespace Pattern\Strategy\Duck;

use Pattern\Utils\Console;

class MallardDuck extends Duck
{
    public function __construct()
    {
        $this->quackBehavior = new Quack();
        $this->flyBehavior = new FlyWithWings();
    }

    public function display(): void
    {
        $this->duckName();
        Console::getInstance()->line("I'm a real Mallard duck");
    }
}
