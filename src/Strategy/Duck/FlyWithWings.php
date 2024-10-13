<?php

declare(strict_types=1);

namespace Pattern\Strategy\Duck;

class FlyWithWings implements FlyBehavior
{
    public function fly(): void
    {
        echo "I'm flying!\n";
    }
}
