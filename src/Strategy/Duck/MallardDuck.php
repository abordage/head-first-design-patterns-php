<?php

declare(strict_types=1);

namespace Pattern\Strategy\Duck;

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
        echo "I'm a real Mallard duck\n";
    }
}
