<?php

declare(strict_types=1);

namespace Pattern\Strategy\Character;

use Pattern\Utils\Console;

class BowAndArrowBehavior implements WeaponBehavior
{
    public function useWeapon(): void
    {
        Console::getInstance()->yellow('use Bow');
    }
}
