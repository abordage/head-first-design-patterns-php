<?php

namespace Pattern\Strategy\Character;

class AxeBehavior implements WeaponBehavior
{
    public function useWeapon(): void
    {
        echo "use Axe\n";
    }
}
