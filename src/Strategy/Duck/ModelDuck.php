<?php

declare(strict_types=1);

namespace Pattern\Strategy\Duck;

use Pattern\Utils\Console;

class ModelDuck extends Duck
{
    public function __construct()
    {
        $this->quackBehavior = new MuteQuack();
        $this->flyBehavior = new FlyNoWay();
    }

    public function display(): void
    {
        $this->duckName();
        Console::getInstance()->line("I'm a Model duck");
    }
}
