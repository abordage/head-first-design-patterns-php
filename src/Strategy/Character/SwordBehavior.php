<?php

declare(strict_types=1);

namespace Pattern\Strategy\Character;

class SwordBehavior implements WeaponBehavior
{
    public function useWeapon(): void
    {
        echo "use Sword\n";
    }
}
