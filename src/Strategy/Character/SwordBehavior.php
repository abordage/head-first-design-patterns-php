<?php

declare(strict_types=1);

namespace Pattern\Strategy\Character;

use Pattern\Utils\Console;

readonly class SwordBehavior implements WeaponBehavior
{
    public function useWeapon(): void
    {
        Console::getInstance()->cyan('Use Sword');
    }
}
