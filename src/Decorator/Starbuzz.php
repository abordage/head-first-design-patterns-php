<?php

// php src/Decorator/Starbuzz.php

require 'vendor/autoload.php';

use Pattern\Decorator\Starbuzz\DarkRoast;
use Pattern\Decorator\Starbuzz\Espresso;
use Pattern\Decorator\Starbuzz\HouseBlend;
use Pattern\Decorator\Starbuzz\Mocha;
use Pattern\Decorator\Starbuzz\Soy;
use Pattern\Decorator\Starbuzz\Whip;

$beverage = new Espresso();
echo $beverage->getDescription() . ': $' . ($beverage->cost() / 100) . "\n";

$beverage2 = new DarkRoast();
$beverage2 = new Mocha($beverage2);
$beverage2 = new Mocha($beverage2);
$beverage2 = new Whip($beverage2);
echo $beverage2->getDescription() . ': $' . ($beverage2->cost() / 100) . "\n";

$beverage3 = new HouseBlend();
$beverage3 = new Soy($beverage3);
$beverage3 = new Mocha($beverage3);
$beverage3 = new Whip($beverage3);
echo $beverage3->getDescription() . ': $' . ($beverage3->cost() / 100) . "\n";
