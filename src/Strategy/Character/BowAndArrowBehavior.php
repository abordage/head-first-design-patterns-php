<?php

declare(strict_types=1);

namespace Pattern\Strategy\Character;

class BowAndArrowBehavior implements WeaponBehavior
{
    public function useWeapon(): void
    {
        echo "use Bow\n";
    }
}
