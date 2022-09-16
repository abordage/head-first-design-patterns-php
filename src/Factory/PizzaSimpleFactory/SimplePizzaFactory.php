<?php

namespace Pattern\Factory\PizzaSimpleFactory;

use Exception;

class SimplePizzaFactory
{
    /**
     * @throws Exception
     */
    public function createPizza(string $type): Pizza
    {
        return match ($type) {
            'cheese' => new CheesePizza(),
            'clam' => new ClamPizza(),
            'veggie' => new VeggiePizza(),
            'pepperoni' => new PepperoniPizza(),
            default => throw new Exception('invalid type of pizza'),
        };
    }
}
