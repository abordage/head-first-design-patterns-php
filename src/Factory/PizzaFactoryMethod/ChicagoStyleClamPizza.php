<?php

namespace Pattern\Factory\PizzaFactoryMethod;

class ChicagoStyleClamPizza extends Pizza
{
    public function __construct()
    {
        $this->name = 'Chicago Style Clam Pizza';
        $this->dough = 'Extra Thick Crust Dough';
        $this->sauce = 'Plum Tomato Sauce';

        $this->toppings[] = 'Shredded Mozzarella Cheese';
        $this->toppings[] = 'Frozen Clams from Chesapeake Bay';
    }

    public function cut(): void
    {
        echo "Cutting the pizza into square slices\n";
    }
}
