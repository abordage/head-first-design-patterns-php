<?php

namespace Pattern\Strategy\Duck;

class FlyRocketPowered implements FlyBehavior
{
    public function fly(): void
    {
        echo "I'm flying with a rocket!\n";
    }
}
