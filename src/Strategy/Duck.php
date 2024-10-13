<?php

declare(strict_types=1);

// php src/Strategy/Duck.php

require 'vendor/autoload.php';

use Pattern\Strategy\Duck\FlyRocketPowered;
use Pattern\Strategy\Duck\MallardDuck;
use Pattern\Strategy\Duck\ModelDuck;
use Pattern\Strategy\Duck\Squeak;

$mallard = new MallardDuck();
$mallard->performQuack();
$mallard->display();
$mallard->performFly();
$mallard->swim();

$model = new ModelDuck();
$model->performQuack();
$model->display();
$model->performFly();
$model->setFlyBehavior(new FlyRocketPowered());
$model->performFly();
$model->setQuackBehavior(new Squeak());
$model->performQuack();
$model->swim();
