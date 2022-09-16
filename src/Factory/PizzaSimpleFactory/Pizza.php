<?php

namespace Pattern\Factory\PizzaSimpleFactory;

abstract class Pizza
{
    protected string $name;
    protected string $dough;
    protected string $sauce;
    protected array $toppings = [];

    public function getName(): string
    {
        return $this->name;
    }

    public function prepare(): void
    {
        echo 'Preparing ' . $this->name . "\n";
    }

    public function bake(): void
    {
        echo 'Baking ' . $this->name . "\n";
    }

    public function cut(): void
    {
        echo 'Cutting ' . $this->name . "\n";
    }

    public function box(): void
    {
        echo 'Boxing ' . $this->name . "\n";
    }

    public function __toString(): string
    {
        $strings = [];
        $strings[] = '---- ' . $this->name . ' ----';
        $strings[] = $this->dough;
        $strings[] = $this->sauce;
        foreach ($this->toppings as $topping) {
            $strings[] = $topping;
        }

        return implode("\n", $strings);
    }
}
