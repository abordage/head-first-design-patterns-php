<?php

declare(strict_types=1);

namespace Pattern\Strategy\Character;

class Knight extends Character
{
    public function __construct()
    {
        $this->weapon = new SwordBehavior();
    }
}
