<?php

declare(strict_types=1);

namespace Pattern\Strategy\Character;

use Pattern\Utils\Console;

class AxeBehavior implements WeaponBehavior
{
    public function useWeapon(): void
    {
        Console::getInstance()->red('use Axe');
    }
}
