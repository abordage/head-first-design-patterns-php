<?php

namespace Pattern\Factory\PizzaSimpleFactory;

class SimplePizzaFactory
{
    public function createPizza(string $type): Pizza
    {
        return match ($type) {
            'cheese' => new CheesePizza(),
            'clam' => new ClamPizza(),
            'veggie' => new VeggiePizza(),
            default => new PepperoniPizza(),
        };
    }
}
