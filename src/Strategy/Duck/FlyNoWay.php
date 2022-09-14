<?php

namespace Pattern\Strategy\Duck;

class FlyNoWay implements FlyBehavior
{
    public function fly(): void
    {
        echo "I can't fly!\n";
    }
}
