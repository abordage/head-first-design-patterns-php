<?php

namespace Pattern\Factory\PizzaFactoryMethod;

use Exception;

class NYPizzaStore extends PizzaStore
{
    /**
     * @throws Exception
     */
    public function createPizza(string $type): Pizza
    {
        return match ($type) {
            'cheese' => new NYStyleCheesePizza(),
            'veggie' => new NYStyleVeggiePizza(),
            'clam' => new NYStyleClamPizza(),
            'pepperoni' => new NYStylePepperoniPizza(),
            default => throw new Exception('invalid type of pizza'),
        };
    }
}
