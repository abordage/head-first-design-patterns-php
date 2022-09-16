<?php

namespace Pattern\Factory\PizzaFactoryMethod;

abstract class PizzaStore
{
    abstract public function createPizza(string $type): Pizza;

    public function orderPizza(string $type): Pizza
    {
        $pizza = $this->createPizza($type);

        echo "\n--- Making a " . $pizza->getName() . " ---\n";

        $pizza->prepare();
        $pizza->bake();
        $pizza->cut();
        $pizza->box();

        return $pizza;
    }
}
