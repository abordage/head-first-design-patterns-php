<?php

namespace Pattern\Strategy\Duck;

class Squeak implements QuackBehavior
{
    public function quack(): void
    {
        echo "Squeak\n";
    }
}
