<?php

declare(strict_types=1);

namespace Pattern\Strategy;

// php src/Strategy/Duck.php

require 'vendor/autoload.php';

use Pattern\Strategy\Duck\FlyRocketPowered;
use Pattern\Strategy\Duck\MallardDuck;
use Pattern\Strategy\Duck\ModelDuck;
use Pattern\Strategy\Duck\Squeak;

readonly class Duck
{
    public function __construct(private MallardDuck $mallardDuck, private ModelDuck $modelDuck)
    {
    }

    public function run(): void
    {
        $this->makeMallardDuck();
        $this->makeModelDuck();
    }

    private function makeMallardDuck(): void
    {
        $this->mallardDuck->performQuack();
        $this->mallardDuck->display();
        $this->mallardDuck->performFly();
        $this->mallardDuck->swim();
    }

    private function makeModelDuck(): void
    {
        $this->modelDuck->performQuack();
        $this->modelDuck->display();
        $this->modelDuck->performFly();
        $this->modelDuck->setFlyBehavior(new FlyRocketPowered());
        $this->modelDuck->performFly();
        $this->modelDuck->setQuackBehavior(new Squeak());
        $this->modelDuck->performQuack();
        $this->modelDuck->swim();
    }
}

(new Duck(new MallardDuck(), new ModelDuck()))->run();
