<?php

namespace Pattern\Factory\PizzaFactoryMethod;

use Exception;

class ChicagoPizzaStore extends PizzaStore
{
    /**
     * @throws Exception
     */
    public function createPizza(string $type): Pizza
    {
        return match ($type) {
            'cheese' => new ChicagoStyleCheesePizza(),
            'veggie' => new ChicagoStyleVeggiePizza(),
            'clam' => new ChicagoStyleClamPizza(),
            'pepperoni' => new ChicagoStylePepperoniPizza(),
            default => throw new Exception('invalid type of pizza'),
        };
    }
}
