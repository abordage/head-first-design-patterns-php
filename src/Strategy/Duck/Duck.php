<?php

declare(strict_types=1);

namespace Pattern\Strategy\Duck;

use Pattern\Utils\Console;
use ReflectionClass;

abstract class Duck
{
    public FlyBehavior $flyBehavior;

    public QuackBehavior $quackBehavior;

    abstract public function display(): void;

    public function performFly(): void
    {
        $this->duckName();
        $this->flyBehavior->fly();
    }

    public function performQuack(): void
    {
        $this->duckName();
        $this->quackBehavior->quack();
    }

    protected function duckName(): void
    {
        Console::getInstance()->write((new ReflectionClass($this))->getShortName() . ': ');
    }

    public function swim(): void
    {
        $this->duckName();
        Console::getInstance()->line('All ducks float, even decoys!');
    }

    public function setFlyBehavior(FlyBehavior $flyBehavior): void
    {
        $this->flyBehavior = $flyBehavior;
    }

    public function setQuackBehavior(QuackBehavior $quackBehavior): void
    {
        $this->quackBehavior = $quackBehavior;
    }
}
