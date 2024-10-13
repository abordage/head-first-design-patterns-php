<?php

declare(strict_types=1);

namespace Pattern\Strategy\Character;

class KnifeBehavior implements WeaponBehavior
{
    public function useWeapon(): void
    {
        echo "use Knife\n";
    }
}
