<?php

declare(strict_types=1);

namespace Pattern\Strategy\Character;

use Pattern\Utils\Console;

class KnifeBehavior implements WeaponBehavior
{
    public function useWeapon(): void
    {
        Console::getInstance()->magenta('use Knife');
    }
}
