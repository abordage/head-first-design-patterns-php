<?php

declare(strict_types=1);

namespace Pattern\Strategy\Duck;

interface QuackBehavior
{
    public function quack(): void;
}
