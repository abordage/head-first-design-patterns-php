<?php

namespace Pattern\Decorator\StarbuzzWithSizes;

abstract class Beverage
{
    public string $description = 'Unknown Beverage';

    public Size $size = Size::TALL;

    public function getDescription(): string
    {
        return $this->description;
    }

    public function setSize(Size $size): void
    {
        $this->size = $size;
    }

    public function getSize(): Size
    {
        return $this->size;
    }

    abstract public function cost(): int;
}
