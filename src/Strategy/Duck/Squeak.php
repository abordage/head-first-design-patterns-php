<?php

declare(strict_types=1);

namespace Pattern\Strategy\Duck;

class Squeak implements QuackBehavior
{
    public function quack(): void
    {
        echo "Squeak\n";
    }
}
