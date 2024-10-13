<?php

declare(strict_types=1);

namespace Pattern\Strategy\Duck;

interface FlyBehavior
{
    public function fly(): void;
}
