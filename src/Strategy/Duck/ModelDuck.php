<?php

namespace Pattern\Strategy\Duck;

class ModelDuck extends Duck
{
    public function __construct()
    {
        $this->quackBehavior = new MuteQuack();
        $this->flyBehavior = new FlyNoWay();
    }

    public function display(): void
    {
        $this->duckName();
        echo "I'm a Model duck\n";
    }
}
