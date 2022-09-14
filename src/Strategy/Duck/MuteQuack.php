<?php

namespace Pattern\Strategy\Duck;

class MuteQuack implements QuackBehavior
{
    public function quack(): void
    {
        echo "<< Silence >>\n";
    }
}
