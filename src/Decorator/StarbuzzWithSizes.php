<?php

// php src/Decorator/StarbuzzWithSizes.php

require 'vendor/autoload.php';

use Pattern\Decorator\StarbuzzWithSizes\DarkRoast;
use Pattern\Decorator\StarbuzzWithSizes\Espresso;
use Pattern\Decorator\StarbuzzWithSizes\HouseBlend;
use Pattern\Decorator\StarbuzzWithSizes\Mocha;
use Pattern\Decorator\StarbuzzWithSizes\Size;
use Pattern\Decorator\StarbuzzWithSizes\Soy;
use Pattern\Decorator\StarbuzzWithSizes\Whip;

$beverage = new Espresso();
$beverage->setSize(Size::GRANDE);
echo $beverage->getDescription() . ': $' . ($beverage->cost() / 100) . "\n";

$beverage2 = new DarkRoast();
$beverage2 = new Mocha($beverage2);
$beverage2 = new Mocha($beverage2);
$beverage2 = new Whip($beverage2);
echo $beverage2->getDescription() . ': $' . ($beverage2->cost() / 100) . "\n";

$beverage3 = new HouseBlend();
$beverage3->setSize(Size::VENTI);
$beverage3 = new Soy($beverage3);
$beverage3 = new Mocha($beverage3);
$beverage3 = new Whip($beverage3);
echo $beverage3->getDescription() . ': $' . ($beverage3->cost() / 100) . "\n";
