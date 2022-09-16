<?php

// php src/Factory/PizzaFactoryMethod.php

use Pattern\Factory\PizzaFactoryMethod\ChicagoPizzaStore;
use Pattern\Factory\PizzaFactoryMethod\NYPizzaStore;

require 'vendor/autoload.php';

$nyStore = new NYPizzaStore();
$chicagoStore = new ChicagoPizzaStore();

$pizza = $nyStore->orderPizza('cheese');
echo 'Ethan ordered a ' . $pizza->getName() . "\n";

$pizza = $chicagoStore->orderPizza('cheese');
echo 'Joel ordered a ' . $pizza->getName() . "\n";

$pizza = $nyStore->orderPizza('clam');
echo 'Ethan ordered a ' . $pizza->getName() . "\n";

$pizza = $chicagoStore->orderPizza('clam');
echo 'Joel ordered a ' . $pizza->getName() . "\n";

$pizza = $nyStore->orderPizza('pepperoni');
echo 'Ethan ordered a ' . $pizza->getName() . "\n";

$pizza = $chicagoStore->orderPizza('pepperoni');
echo 'Joel ordered a ' . $pizza->getName() . "\n";

$pizza = $nyStore->orderPizza('veggie');
echo 'Ethan ordered a ' . $pizza->getName() . "\n";

$pizza = $chicagoStore->orderPizza('veggie');
echo 'Joel ordered a ' . $pizza->getName() . "\n";
