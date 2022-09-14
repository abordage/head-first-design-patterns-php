<?php

namespace Pattern\Strategy\Character;

class Troll extends Character
{
    public function __construct()
    {
        $this->weapon = new AxeBehavior();
    }
}
