<?php

declare(strict_types=1);

namespace Pattern\Strategy\Character;

interface WeaponBehavior
{
    public function useWeapon(): void;
}
