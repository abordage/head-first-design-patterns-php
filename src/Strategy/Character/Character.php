<?php

declare(strict_types=1);

namespace Pattern\Strategy\Character;

use ReflectionClass;

abstract class Character
{
    public WeaponBehavior $weapon;

    public function setWeapon(WeaponBehavior $weapon): void
    {
        $this->weapon = $weapon;
    }

    public function fight(): void
    {
        $this->characterName();
        $this->weapon->useWeapon();
    }

    private function characterName(): void
    {
        echo (new ReflectionClass($this))->getShortName() . ' ';
    }
}
