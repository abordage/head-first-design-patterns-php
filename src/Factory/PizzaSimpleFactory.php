<?php

// php src/Factory/PizzaSimpleFactory.php

use Pattern\Factory\PizzaSimpleFactory\PizzaStore;
use Pattern\Factory\PizzaSimpleFactory\SimplePizzaFactory;

require 'vendor/autoload.php';

$factory = new SimplePizzaFactory();
$store = new PizzaStore($factory);

$pizza = $store->orderPizza('cheese');
echo 'We ordered a ' . $pizza->getName() . "\n";
echo $pizza;

echo "\n***\n";

$pizza = $store->orderPizza('veggie');
echo 'We ordered a ' . $pizza->getName() . "\n";
echo $pizza;
