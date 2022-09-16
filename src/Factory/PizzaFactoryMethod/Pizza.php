<?php

namespace Pattern\Factory\PizzaFactoryMethod;

abstract class Pizza
{
    protected string $name;
    protected string $dough;
    protected string $sauce;
    protected array $toppings = [];

    public function prepare(): void
    {
        echo 'Prepare ' . $this->name . "\n";
        echo "Tossing dough...\n";
        echo "Adding sauce...\n";
        echo "Adding toppings:\n";
        foreach ($this->toppings as $topping) {
            echo ' - ' . $topping . "\n";
        }
    }

    public function bake(): void
    {
        echo "Bake for 25 minutes at 350\n";
    }

    public function cut(): void
    {
        echo "Cut the pizza into diagonal slices\n";
    }

    public function box(): void
    {
        echo "Place pizza in official PizzaStore box\n";
    }

    public function getName(): string
    {
        return $this->name;
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
