<?php

namespace Pattern\Strategy\Duck;

class Quack implements QuackBehavior
{
    public function quack(): void
    {
        echo "Quack\n";
    }
}
