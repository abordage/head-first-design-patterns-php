<?php

namespace Pattern\Strategy\Character;

class King extends Character
{
    public function __construct()
    {
        $this->weapon = new KnifeBehavior();
    }
}
