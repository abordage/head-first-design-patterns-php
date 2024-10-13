<?php

declare(strict_types=1);

namespace Pattern\Strategy\Duck;

class Quack implements QuackBehavior
{
    public function quack(): void
    {
        echo "Quack\n";
    }
}
